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
    body, * {
      font-family: 'Poppins', sans-serif !important;
    }
  </style>
</head>

<body class="bg-[#FFFADD]">
  @include('components.navbaradmin')
    <div class="flex justify-end px-8">
      <div class="flex items-center gap-2 mb-7 mt-5">
        <span class="text-gray-800 font-bold text-[12px]">Admin</span>
        <div class="w-[37px] h-[37px] bg-[#FFCC70] rounded-full flex items-center justify-center text-white font-bold">
          <img src="/img/admin/datasiswa/user.png" alt="user" class="w-[21px] h-[21px]">
        </div>
      </div>
    </div>
  <!-- Rectangle 1 - Judul dan Tombol -->
  <div class="bg-white rounded-xl shadow-xl px-8 py-4 flex items-center justify-between mb-6">
    <h1 class="text-2xl md:text-[28px] font-bold text-[#002E48] text-center flex-1">
      Laporan Data Catering
    </h1>
    <button onclick="openMenuModal()" class="ml-6 bg-[#FFCC70] hover:bg-yellow-400 text-black font-semibold text-[16px] py-2 px-4 rounded-[20px] text-sm cursor-pointer">
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
          <th class="px-4 py-2 border border-[#FBA304]">Gambar</th>
          <th class="px-4 py-2 border border-[#FBA304]">Option</th>
        </tr>
      </thead>
      <tbody id="studentTableBody">
        <tr class="bg-[#FFE39C]">
          <td class="px-4 py-2 border border-[#FBA304]">1.</td>
          <td class="px-4 py-2 border border-[#FBA304]">MN-1</td>
          <td class="px-4 py-2 border border-[#FBA304]">Ayam Geprek</td>
          <td class="px-4 py-2 border border-[#FBA304]">Ayam Geprek - Lalapan - Pisang</td>
          <td class="px-4 py-2 border border-[#FBA304]">Rp. 20.000</td>
          <td class="px-4 py-2 border border-[#FBA304] w-[100px] h-auto"> <img src="{{ asset('img/admin/daftarmenu/ayamgeprek.png') }}" alt="menu1"></td>
          <td class="px-4 py-2 border border-[#FBA304]">
            <div class="flex gap-2 items-center justify-center">
              <button class="bg-[#22668D] text-white px-3 py-1 rounded text-xs">Edit</button>
              <button class="bg-[#FF3235] text-white px-3 py-1 rounded text-xs" onclick="this.closest('tr').remove();">Delete</button>
            </div>
          </td>
        </tr>
        @for ($i = 0; $i < 4; $i++)
        <tr class="{{ $i % 2 == 0 ? 'bg-[#FFFADD]' : 'bg-[#FFE39C]' }}">
          @for ($j = 0; $j < 7; $j++)
            <td class="px-4 py-2 border border-[#FBA304]">&nbsp;</td>
          @endfor
        </tr>
        @endfor
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
  <img src="/img/admin/datasiswa/icon_kacang.png" alt="icon kacang" class="fixed right-4 bottom-4 w-[240px] h-[240px] z-[1]" />
  <img src="/img/admin/datasiswa/gelombangbawah.png" alt="gelombang bawah" class="fixed left-0 bottom-0 w-[220px] h-auto z-[-1]" />
</div>

<!-- Modal Pop-Up -->
<div id="menuModal" class="fixed inset-0 bg-black bg-opacity-40 hidden items-center justify-center z-50">
  <div class="bg-white w-[90%] max-w-[640px] rounded-[24px] px-8 py-6 relative">
    <!-- Tombol Close -->
    <button onclick="closeMenuModal()" class="absolute top-4 right-6 text-2xl text-[#FFB100] font-bold">✕</button>

    <!-- Judul -->
    <h2 class="text-center text-[24px] font-bold text-[#002E48] mb-6">Tambah Menu</h2>

    <!-- Form -->
    <form id="menuForm" onsubmit="addMenu(event)">
      <!-- Nama Menu -->
      <label class="block text-[#002E48] font-semibold mb-1">Nama Menu</label>
      <input type="text" id="menuName" class="w-full mb-4 px-4 py-2 rounded-xl bg-[#EDEDED] focus:outline-none" placeholder="Masukkan nama menu" required />

      <!-- Keterangan -->
      <label class="block text-[#002E48] font-semibold mb-1">Keterangan</label>
      <textarea id="description" class="w-full mb-4 px-4 py-3 rounded-xl bg-[#EDEDED] resize-none focus:outline-none" rows="3" placeholder="Tambahkan deskripsi..."></textarea>

      <!-- Harga -->
      <div class="mb-4">
        <label class="block text-[#002E48] font-semibold mb-1">Harga /menu</label>
        <div class="flex gap-6">
          <label class="inline-flex items-center text-[#002E48]">
            <input type="radio" name="price" value="16000" class="mr-2" required /> Rp.16.000
          </label>
          <label class="inline-flex items-center text-[#002E48]">
            <input type="radio" name="price" value="20000" class="mr-2" /> Rp.20.000
          </label>
        </div>
      </div>

      <!-- Upload File -->
      <div class="w-full h-32 bg-[#F5F5F5] border-2 border-dashed border-gray-300 rounded-xl flex flex-col items-center justify-center text-center text-gray-500 mb-6">
        <img src="/img/admin/daftarmenu/upload.png" alt="upload" class="w-[58px] h-[40px] mb-2">
        <p class="font-semibold">Upload a File</p>
        <p class="text-sm">Drag and drop files here</p>
        <input type="file" class="hidden" id="fileUpload" />
      </div>
      
      <!-- Tombol Submit -->
      <button type="submit" class="w-full bg-[#002E48] text-white font-semibold rounded-full py-2 text-center hover:bg-[#001b2e] transition">
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
    console.log({ name, description, price, file });
    // Proses simpan ke backend bisa diintegrasikan di sini
    closeMenuModal();
  }
</script>


</body>
</html>