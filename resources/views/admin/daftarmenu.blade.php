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
    <div class="flex justify-end px-8">
        <div class="flex items-center gap-2 mb-7 mt-5">
            <span class="text-gray-800 font-bold text-[12px]">Admin</span>
            <div
                class="w-[37px] h-[37px] bg-[#FFCC70] rounded-full flex items-center justify-center text-white font-bold">
                <img src="/img/admin/datasiswa/user.png" alt="user" class="w-[21px] h-[21px]">
            </div>
        </div>
    </div>
    <!-- Rectangle 1 - Judul dan Tombol -->
    <div class="bg-white rounded-xl shadow-xl px-8 py-4 flex items-center justify-between mb-6">
        <h1 class="text-2xl md:text-[28px] font-bold text-[#002E48] text-center flex-1">
            Laporan Data Catering
        </h1>
        <button onclick="openMenuModal()"
            class="ml-6 bg-[#FFCC70] hover:bg-yellow-400 text-black font-semibold text-[16px] py-2 px-4 rounded-[20px] text-sm cursor-pointer">
            + Tambah Menu
        </button>
    </div>


    <!-- Rectangle 2 - Tabel -->
    <div class="bg-white rounded-xl shadow-xl px-6 py-4 relative z">
        <div class="overflow-x-auto">
            <table id="studentTable" class="min-w-full border border-[#FBA304] text-sm text-center">
                <thead>
                    <tr class="bg-[#FFFADD] text-gray-800">
                        <th class="px-4 py-2 border border-[#FBA304]">No.</th>
                        <th class="px-4 py-2 border border-[#FBA304]">ID Menu</th>
                        <th class="px-4 py-2 border border-[#FBA304]">Nama Menu</th>
                        <th class="px-4 py-2 border border-[#FBA304]">Keterangan</th>
                        <th class="px-4 py-2 border border-[#FBA304]">Harga Menu</th>
                        <th class="px-4 py-2 border border-[#FBA304]">Kategori</th>
                        <th class="px-4 py-2 border border-[#FBA304]">Gambar</th>
                        <th class="px-4 py-2 border border-[#FBA304]">Option</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($menus as $i => $menu)
                        <tr class="{{ $i % 2 == 0 ? 'bg-[#FFFADD]' : 'bg-[#FFE39C]' }}">
                            <td class="px-4 py-2 border border-[#FBA304]">{{ $menus->firstItem() + $i }}.</td>
                            <td class="px-4 py-2 border border-[#FBA304]">{{ $menu->kode_menu }}</td>
                            <td class="px-4 py-2 border border-[#FBA304]">{{ $menu->nama_menu }}</td>
                            <td class="px-4 py-2 border border-[#FBA304]">{{ $menu->keterangan }}</td>
                            <td class="px-4 py-2 border border-[#FBA304]">Rp.
                                {{ number_format($menu->harga, 0, ',', '.') }}</td>
                            <td class="px-4 py-2 border border-[#FBA304]">{{ $menu->kategori }}</td>
                            <td class="px-4 py-2 border border-[#FBA304] text-center">
                                @if($menu->gambar)
                                    <img src="{{ asset('storage/'.$menu->gambar) }}" alt="gambar" class="w-16 h-16 object-cover rounded mx-auto">
                                @else
                                    <span class="text-gray-400">-</span>
                                @endif
                            </td>
                            <td class="px-4 py-2 border border-[#FBA304]">
                                    <a href="javascript:void(0);" 
                                    class="bg-blue-500 text-white px-3 py-1 rounded-[12px] mr-2"
                                    onclick="openEditMenuModal(this)"
                                    data-id="{{ $menu->id }}"
                                    data-nama="{{ $menu->nama_menu }}"
                                    data-keterangan="{{ $menu->keterangan }}"
                                    data-harga="{{ $menu->harga }}"
                                    data-kategori="{{ $menu->kategori }}"
                                    data-gambar="{{ $menu->gambar ? asset('storage/'.$menu->gambar) : '' }}"
                                    >
                                        Edit
                                    </a>
                                <form action="{{ route('admin.daftarmenu.destroy', $menu->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin hapus menu ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded-[12px]">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- Pagination -->
        <div class="flex justify-end mt-4">
            <nav class="flex items-center space-x-2 text-sm">
                <button class="px-3 py-1 bg-gray-200 text-gray-700 rounded">Previous</button>
                <button class="px-3 py-1 bg-[#22668D] text-white rounded">1</button>
                <button class="px-3 py-1 bg-white border border-gray-300 rounded">2</button>
                <button class="px-3 py-1 bg-white border border-gray-300 rounded">3</button>
                <button class="px-3 py-1 bg-gray-200 text-gray-700 rounded">Next</button>
            </nav>
        </div>
    </div>
    <!-- Gambar icon kacang kanan bawah -->
    <img src="/img/admin/datasiswa/icon_kacang.png" alt="icon kacang"
        class="fixed right-4 bottom-4 w-[240px] h-[240px] z-[1]" />
    <img src="/img/admin/datasiswa/gelombangbawah.png" alt="gelombang bawah"
        class="fixed left-0 bottom-0 w-[220px] h-auto z-[-1]" />
    </div>

    <!-- Modal Pop-Up -->
    <div id="menuModal" class="fixed inset-0 bg-black bg-opacity-40 hidden items-center justify-center z-50">
        <div class="bg-white w-[90%] max-w-[640px] rounded-[24px] px-8 py-6 relative">
            <!-- Tombol Close -->
            <button onclick="closeMenuModal()"
                class="absolute top-4 right-6 text-2xl text-[#FFB100] font-bold">✕</button>

            <!-- Judul -->
            <h2 class="text-center text-[24px] font-bold text-[#002E48] mb-6">Tambah Menu</h2>

            <!-- Form -->
            <form id="menuForm" action="{{ route('admin.daftarmenu.store') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <!-- Nama Menu -->
                <label class="block text-[#002E48] font-semibold mb-1">Nama Menu</label>
                <input type="text" name="nama_menu"
                    class="w-full mb-4 px-4 py-2 rounded-xl bg-[#EDEDED] focus:outline-none"
                    placeholder="Masukkan nama menu" required />

                <!-- Keterangan -->
                <label class="block text-[#002E48] font-semibold mb-1">Keterangan</label>
                <textarea name="keterangan" class="w-full mb-4 px-4 py-3 rounded-xl bg-[#EDEDED] resize-none focus:outline-none"
                    rows="3" placeholder="Tambahkan deskripsi..."></textarea>

                <!-- Harga -->
                <div class="mb-4">
                    <label class="block text-[#002E48] font-semibold mb-1">Harga /menu</label>
                    <div class="flex gap-6">
                        <label class="inline-flex items-center text-[#002E48]">
                            <input type="radio" name="harga" value="16000" class="mr-2" required /> Rp.16.000
                        </label>
                        <label class="inline-flex items-center text-[#002E48]">
                            <input type="radio" name="harga" value="20000" class="mr-2" /> Rp.20.000
                        </label>
                    </div>
                </div>

                <!-- Kategori -->
                <label class="block text-[#002E48] font-semibold mb-1">Kategori</label>
                <select name="kategori" class="w-full mb-4 px-4 py-2 rounded-xl bg-[#EDEDED] focus:outline-none"
                    required>
                    <option value="">Pilih Kategori</option>
                    <option value="Main Course">Main Course</option>
                    <option value="Rice Bowl">Rice Bowl</option>
                    <!-- Tambahkan kategori lain jika perlu -->
                </select>

                <!-- Upload File -->
                <div
                    class="w-full h-32 bg-[#F5F5F5] border-2 border-dashed border-gray-300 rounded-xl flex flex-col items-center justify-center text-center text-gray-500 mb-6">
                    <img src="/img/admin/daftarmenu/upload.png" alt="upload" class="w-[58px] h-[40px] mb-2">
                    <p class="font-semibold">Upload a File</p>
                    <p class="text-sm">Drag and drop files here</p>
                    <input type="file" name="gambar" class="w-full mt-2" />
                </div>

                <!-- Tombol Submit -->
                <button type="submit"
                    class="w-full bg-[#002E48] text-white font-semibold rounded-full py-2 text-center hover:bg-[#001b2e] transition">
                    Tambah
                </button>
            </form>
        </div>
    </div>
    <!-- Modal untuk Tambah Siswa -->
    <script>
        function openMenuModal() {
            document.getElementById('menuModal').classList.remove('hidden');
            document.getElementById('menuModal').classList.add('flex');
        }

        function closeMenuModal() {
            document.getElementById('menuModal').classList.add('hidden');
            document.getElementById('menuModal').classList.remove('flex');
            document.getElementById('menuForm').reset();
        }

        function addMenu(event) {
            event.preventDefault();
            const name = document.getElementById('menuName').value;
            const description = document.getElementById('description').value;
            const price = document.querySelector('input[name="price"]:checked')?.value;
            const file = document.getElementById('fileUpload').files[0];
            console.log({
                name,
                description,
                price,
                file
            });
            // Proses simpan ke backend bisa diintegrasikan di sini
            closeMenuModal();
        }

        function openEditMenuModal(btn) {
            // ... kode lain ...
            let gambar = btn.getAttribute('data-gambar');
            let preview = document.getElementById('edit_gambar_preview');
            if (gambar) {
                preview.src = gambar;
                preview.classList.remove('hidden');
            } else {
                preview.classList.add('hidden');
            }
            // ... kode lain ...
        }

        document.querySelector('#editMenuForm input[name="gambar"]').addEventListener('change', function(e) {
            const [file] = e.target.files;
            if (file) {
                const preview = document.getElementById('edit_gambar_preview');
                preview.src = URL.createObjectURL(file);
                preview.classList.remove('hidden');
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Sukses',
                    text: '{{ session('success') }}',
                    confirmButtonColor: '#FFCC70'
                });
            });
        </script>
    @endif
    <script>
        function confirmDelete(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Yakin hapus menu?',
                text: "Data yang dihapus tidak bisa dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#FF3235',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    e.target.submit();
                }
            });
            return false;
        }
    </script>

    <!-- Modal Edit Menu -->
    <div id="editMenuModal" class="fixed inset-0 bg-black bg-opacity-40 hidden items-center justify-center z-50">
        <div class="bg-white w-[90%] max-w-[640px] max-h-[90vh] overflow-y-auto rounded-[24px] px-8 py-6 relative scrollbar-thin">
            <!-- Tombol Close -->
            <button onclick="closeEditMenuModal()"
                class="absolute top-4 right-6 text-2xl text-[#FFB100] font-bold">✕</button>

            <!-- Judul -->
            <h2 class="text-center text-[24px] font-bold text-[#002E48] mb-6">Edit Menu</h2>

            <!-- Form -->
            <form id="editMenuForm" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Nama Menu -->
                <label class="block text-[#002E48] font-semibold mb-1">Nama Menu</label>
                <input type="text" name="nama_menu" id="edit_nama_menu"
                    class="w-full mb-4 px-4 py-2 rounded-xl bg-[#EDEDED] focus:outline-none"
                    required />

                <!-- Keterangan -->
                <label class="block text-[#002E48] font-semibold mb-1">Keterangan</label>
                <textarea name="keterangan" id="edit_keterangan"
                    class="w-full mb-4 px-4 py-3 rounded-xl bg-[#EDEDED] resize-none focus:outline-none"
                    rows="3"></textarea>

                <!-- Harga -->
                <div class="mb-4">
                    <label class="block text-[#002E48] font-semibold mb-1">Harga /menu</label>
                    <div class="flex gap-6">
                        <label class="inline-flex items-center text-[#002E48]">
                            <input type="radio" name="harga" id="edit_harga_16000" value="16000" class="mr-2" required />
                            Rp.16.000
                        </label>
                        <label class="inline-flex items-center text-[#002E48]">
                            <input type="radio" name="harga" id="edit_harga_20000" value="20000" class="mr-2" />
                            Rp.20.000
                        </label>
                    </div>
                </div>

                <!-- Kategori -->
                <label class="block text-[#002E48] font-semibold mb-1">Kategori</label>
                <select name="kategori" id="edit_kategori"
                    class="w-full mb-4 px-4 py-2 rounded-xl bg-[#EDEDED] focus:outline-none" required>
                    <option value="">Pilih Kategori</option>
                    <option value="Main Course">Main Course</option>
                    <option value="Rice Bowl">Rice Bowl</option>
                </select>

                <!-- Upload File Gambar -->
                <label class="block text-[#002E48] font-semibold mb-1">Gambar Menu</label>
                <div
                    class="w-full bg-[#F5F5F5] border-2 border-dashed border-gray-300 rounded-xl flex flex-col items-center justify-center text-center text-gray-500 p-4 mb-6">
                    <img src="/img/admin/daftarmenu/upload.png" alt="upload" class="w-[58px] h-[40px] mb-2" />
                    <p class="font-semibold">Upload a File</p>
                    <p class="text-sm">Drag and drop files here or click to select</p>

                    <label
                        class="mt-3 w-full cursor-pointer bg-white border border-gray-300 text-gray-700 rounded-md py-2 px-4 text-sm text-center hover:bg-gray-100 transition">
                        Pilih Gambar
                        <input type="file" name="gambar" id="edit_gambar" accept="image/*" class="hidden" />
                    </label>

                    <!-- Preview Gambar -->
                    <img id="edit_gambar_preview"
                        src="{{ asset('storage/menu/'.$menu->gambar) }}"
                        alt="Preview Gambar"
                        class="w-20 h-20 object-cover mt-4 rounded-md border {{ $menu->gambar ? '' : 'hidden' }}" />
                </div>

                <!-- Tombol Submit -->
                <button type="submit"
                    class="w-full bg-[#002E48] text-white font-semibold rounded-full py-2 text-center hover:bg-[#001b2e] transition">
                    Update
                </button>
            </form>
        </div>
    </div>

    <script>
        function openEditMenuModal(btn) {
            // Isi form dengan data dari tombol
            document.getElementById('edit_nama_menu').value = btn.getAttribute('data-nama');
            document.getElementById('edit_keterangan').value = btn.getAttribute('data-keterangan') || '';
            // Harga
            if (btn.getAttribute('data-harga') == '16000') {
                document.getElementById('edit_harga_16000').checked = true;
            } else if (btn.getAttribute('data-harga') == '20000') {
                document.getElementById('edit_harga_20000').checked = true;
            }
            // Kategori
            document.getElementById('edit_kategori').value = btn.getAttribute('data-kategori');
            // Gambar preview
            let gambar = btn.getAttribute('data-gambar');
            let preview = document.getElementById('edit_gambar_preview');
            if (gambar) {
                preview.src = gambar;
                preview.classList.remove('hidden');
            } else {
                preview.classList.add('hidden');
            }
            // Set action form
            let id = btn.getAttribute('data-id');
            document.getElementById('editMenuForm').action = '/admin/daftarmenu/' + id;

            // Tampilkan modal
            document.getElementById('editMenuModal').classList.remove('hidden');
            document.getElementById('editMenuModal').classList.add('flex');
        }
        function closeEditMenuModal() {
            document.getElementById('editMenuModal').classList.add('hidden');
            document.getElementById('editMenuModal').classList.remove('flex');
            document.getElementById('editMenuForm').reset();
            document.getElementById('edit_gambar_preview').classList.add('hidden');
        }
        
    </script>

</body>

</html>
