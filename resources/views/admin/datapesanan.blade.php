<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Laporan Data Siswa</title>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body,
        * {
            font-family: 'Poppins', sans-serif !important;
        }
    </style>
</head>

<body class="bg-[#FFFADD]">
    @include('components.navbaradmin')
    <div class="min-h-screen bg-[#FFFADD] p-9">
        <!-- Header -->
        <div class="flex justify-between items-center mb-6 pl-10">
            <h1 class="text-[20px] font-semibold">Order History</h1>
            <div class="flex items-center gap-2">
                <span class="text-gray-800 font-semibold text-[20px]">Admin</span>
                <div
                    class="w-[40px] h-[40px] bg-[#FFCC70] rounded-full flex items-center justify-center text-white font-bold">
                    <img src="/img/admin/datasiswa/user.png" alt="user" class="w-[31px] h-[31px]">
                </div>
            </div>
        </div>

        <!-- Card Orders -->
        <div class="flex flex-col items-center space-y-2">
            @foreach ($orders as $order)
                <div x-data="{ open: false }" class="bg-white rounded-xl shadow-md mb-5 p-5 w-full max-w-6xl">
                    <div class="flex justify-between mb-2">
                        <div class="font-semibold">Order-{{ $order->id }}</div>
                        <div class="text-sm text-[#A3A3A3]">
                            {{ \Carbon\Carbon::parse($order->created_at)->format('F j, Y, H:i') }}
                        </div>
                    </div>
                    <div class="grid grid-cols-6 space-x-10">
                        <div>
                            <div class="text-sm font-semibold text-gray-700">Name</div>
                            <div class="font-medium">{{ $order->nama }}</div>
                        </div>
                        <div>
                            <div class="text-sm font-semibold text-gray-700">Total</div>
                            <div class="font-medium text-red-500">Rp.
                                {{ number_format($order->total_price, 0, ',', '.') }}
                            </div>
                        </div>
                        <div class="col-span-2">
                            <div class="text-sm font-semibold text-gray-700">Delivery Address</div>
                            <div class="flex items-center gap-1">
                                <img src="/img/admin/datapesanan/location.png" alt="location" class="w-[20px] h-[20px]">
                                <span class="whitespace-nowrap font-medium">{{ $order->alamat }}</span>
                            </div>
                        </div>
                        <div>
                            <div class="text-sm font-semibold text-gray-700 mb-1">Status</div>
                            <div class="flex gap-2">
                                <div
                                    class="w-4 h-4 rounded-full {{ $order->status_pembayaran == 'pending' ? 'bg-gray-300' : ($order->status_pembayaran == 'menunggu konfirmasi' ? 'bg-yellow-400' : 'bg-green-500') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-span-1 flex justify-end items-center">
                            <div class="w-[40px] h-[40px] bg-[#E1E1E1] rounded-full flex items-center justify-center cursor-pointer"
                                @click="open = !open">
                                <img :class="{ 'rotate-180': open }" src="/img/admin/datapesanan/down.png"
                                    alt="down" class="w-[30px] h-[30px] transition-transform duration-200">
                            </div>
                        </div>
                    </div>
                    <!-- Detail informasinya, muncul jika open=true -->
                    <div x-show="open" x-transition class="mt-4 border-t pt-4">
                        <div class="grid grid-cols-3 gap-4">
                            <div>
                                <div class="text-sm font-semibold text-gray-700">Note</div>
                                <div class="text-gray-700 text-[14px] font-medium">{{ $order->catatan ?? '-' }}</div>
                            </div>
                            <div>
                                <div class="text-sm font-semibold text-gray-700 mb-2">Order Menu</div>
                                <div class="flex flex-col gap-2 font-poppins font-medium text-[12px] text-gray-500">
                                    @foreach ($order->items as $item)
                                        <div class="flex items-center gap-2 pb-2">
                                            @if ($item->menu && $item->menu->gambar && file_exists(public_path('storage/' . $item->menu->gambar)))
                                                <img src="{{ asset('storage/' . $item->menu->gambar) }}" alt="menu"
                                                    class="w-10 h-10 rounded-full object-cover">
                                            @else
                                                <img src="/img/admin/datapesanan/menu1.png" alt="menu"
                                                    class="w-10 h-10 rounded-full object-cover">
                                            @endif
                                            <div>
                                                <span class="block">{{ $item->menu->nama_menu ?? '-' }}</span>
                                                <span
                                                    class="block text-gray-500">Rp.{{ number_format($item->price, 0, ',', '.') }}
                                                    x{{ $item->qty }}</span>
                                            </div>
                                            <div class="ml-auto flex flex-col items-end">
                                                <span class="text-gray-500">Total</span>
                                                <span
                                                    class="font-semibold text-gray-700">Rp.{{ number_format($item->subtotal, 0, ',', '.') }}</span>
                                            </div>
                                        </div>
                                        <div class="border-t border-gray-300"></div>
                                    @endforeach
                                </div>
                            </div>
                            <!-- Status & Payment Column -->
                            <div class="flex flex-col gap-4 pl-7">
                                <div>
                                    <div class="text-sm font-semibold text-gray-700">Payment Method</div>
                                    <div class="text-gray-700">{{ $order->metode_pembayaran ?? '-' }}</div>
                                </div>
                                <div>
                                    <div class="text-sm font-semibold text-gray-700">Status Pesanan</div>
                                    <div class="text-green-600 font-bold">{{ $order->status_pembayaran ?? '-' }}</div>
                                </div>
                                <div>
                                    <div class="text-sm font-semibold text-gray-700">Bukti Pembayaran</div>
                                    @if ($order->bukti_pembayaran)
                                        <a href="{{ asset('storage/' . $order->bukti_pembayaran) }}" target="_blank"
                                            class="text-blue-600 underline">Lihat Bukti</a>
                                    @else
                                        <span class="text-gray-500">-</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @if ($order->status_pembayaran !== 'lunas')
                        <form action="{{ route('admin.pesanan.konfirmasi', $order->id) }}" method="POST"
                            class="inline">
                            @csrf
                            <button type="submit"
                                class="bg-green-500 text-white px-3 py-1 rounded text-xs hover:bg-green-700 cursor-pointer">
                                Konfirmasi
                            </button>
                        </form>
                    @endif
                    <form action="{{ route('admin.pesanan.delete', $order->id) }}" method="POST"
                        onsubmit="return confirm('Yakin hapus pesanan ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 font-bold hover:underline float-right">Hapus</button>
                    </form>
                </div>
            @endforeach
        </div>

        {{-- end card order 1 --}}

    </div>

    <!-- Pagination -->
    <div class="fixed bottom-6 left-0 w-full flex justify-center items-end z-50">
        <div class="flex justify-center mt-8">
            {{ $orders->links('vendor.pagination.custom-tailwind') }}
        </div>
    </div>
    </div>
</body>

</html>
