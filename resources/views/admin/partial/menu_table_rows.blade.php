@foreach ($menus as $i => $menu)
    <tr class="{{ $i % 2 == 0 ? 'bg-[#FFFADD]' : 'bg-[#FFE39C]' }}">
        <td class="px-4 py-2 border border-[#FBA304]">{{ $menus->firstItem() + $i }}.</td>
        <td class="px-4 py-2 border border-[#FBA304]">{{ $menu->kode_menu }}</td>
        <td class="px-4 py-2 border border-[#FBA304]">{{ $menu->nama_menu }}</td>
        <td class="px-4 py-2 border border-[#FBA304]">{{ $menu->keterangan }}</td>
        <td class="px-4 py-2 border border-[#FBA304]">Rp.{{ number_format($menu->harga, 0, ',', '.') }}</td>
        <td class="px-4 py-2 border border-[#FBA304]">{{ $menu->kategori }}</td>
        <td class="px-4 py-2 border border-[#FBA304] text-center">
            @if ($menu->gambar)
                <img src="{{ asset('storage/' . $menu->gambar) }}" alt="gambar"
                    class="w-16 h-16 object-cover rounded mx-auto">
            @else
                <span class="text-gray-400">-</span>
            @endif
        </td>
        <td class="px-4 py-2 border border-[#FBA304]">
            <a href="javascript:void(0);"
                class="bg-blue-500 text-white px-3 py-1 rounded-[12px] mr-2"
                onclick="openEditMenuModal(this)" data-id="{{ $menu->id }}"
                data-nama="{{ $menu->nama_menu }}" data-keterangan="{{ $menu->keterangan }}"
                data-harga="{{ $menu->harga }}" data-kategori="{{ $menu->kategori }}"
                data-gambar="{{ $menu->gambar ? asset('storage/' . $menu->gambar) : '' }}">
                Edit
            </a>
            <form action="{{ route('admin.daftarmenu.destroy', $menu->id) }}" method="POST"
                class="inline" onsubmit="return confirm('Yakin hapus menu ini?')">
                @csrf
                @method('DELETE')
                <button type="submit"
                    class="bg-red-500 text-white px-3 py-1 rounded-[12px]">Hapus</button>
            </form>
        </td>
    </tr>
@endforeach