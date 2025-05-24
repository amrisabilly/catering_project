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

<body>
  @include('components.navbaradmin')
  <!-- Rectangle 1 - Judul dan Tombol -->
  <div class="bg-white rounded-xl shadow-xl px-8 py-4 flex items-center justify-between mb-6">
    <h1 class="text-2xl md:text-[28px] font-bold text-[#002E48] text-center flex-1">
      Laporan Data Catering
    </h1>
    <button onclick="openModal()" class="ml-6 bg-[#FFCC70] hover:bg-yellow-400 text-black font-medium text-[16px] py-2 px-4 rounded-[20px] text-sm cursor-pointer">
      + Entri Siswa
    </button>
  </div>

 <!-- filepath: c:\laragon\www\catering_project\resources\views\admin\datasiswa.blade.php
<!-- ...existing code... -->

<!-- Rectangle 2 - Tabel -->
<div class="bg-white rounded-xl shadow-xl px-6 py-4 relative z-[-10] ">
  <div class="overflow-x-auto">
    <table id="studentTable" class="min-w-full border border-[#FBA304] text-sm text-center">
      <thead>
        <tr class="bg-[#FFFADD] text-gray-800">
          <th class="px-4 py-2 border border-[#FBA304]">No.</th>
          <th class="px-4 py-2 border border-[#FBA304]">ID Student</th>
          <th class="px-4 py-2 border border-[#FBA304]">Full Name</th>
          <th class="px-4 py-2 border border-[#FBA304]">Phone Number</th>
          <th class="px-4 py-2 border border-[#FBA304]">Class</th>
          <th class="px-4 py-2 border border-[#FBA304]">Gender</th>
          <th class="px-4 py-2 border border-[#FBA304]">Menu Price</th>
          <th class="px-4 py-2 border border-[#FBA304]">Allergies</th>
          <th class="px-4 py-2 border border-[#FBA304]">Additional Note</th>
          <th class="px-4 py-2 border border-[#FBA304]">Option</th>
        </tr>
      </thead>
      <tbody id="studentTableBody">
        <tr class="bg-[#FFE39C]">
          <td class="px-4 py-2 border border-[#FBA304]">1.</td>
          <td class="px-4 py-2 border border-[#FBA304]">SIS-1</td>
          <td class="px-4 py-2 border border-[#FBA304]">Zahirah Salsabila</td>
          <td class="px-4 py-2 border border-[#FBA304]">(+62)81368375553</td>
          <td class="px-4 py-2 border border-[#FBA304]">7 Istambul</td>
          <td class="px-4 py-2 border border-[#FBA304]">Female</td>
          <td class="px-4 py-2 border border-[#FBA304]">Rp.20.000</td>
          <td class="px-4 py-2 border border-[#FBA304]">Udang</td>
          <td class="px-4 py-2 border border-[#FBA304]">Ayam (dada)</td>
          <td class="px-4 py-2 border border-[#FBA304]">
            <div class="flex gap-2 items-center justify-center">
              <button class="bg-[#22668D] text-white px-3 py-1 rounded text-xs">Edit</button>
              <button class="bg-[#FF3235] text-white px-3 py-1 rounded text-xs" onclick="this.closest('tr').remove();">Delete</button>
            </div>
          </td>
        </tr>
        @for ($i = 0; $i < 4; $i++)
        <tr class="{{ $i % 2 == 0 ? 'bg-[#FFFADD]' : 'bg-[#FFE39C]' }}">
          @for ($j = 0; $j < 10; $j++)
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
  <img src="/img/admin/datasiswa/icon_kacang.png" alt="icon kacang" class="fixed right-4 bottom-4 w-[270px] h-[270px] z-[1]" />
</div>

<!-- Modal Pop-Up -->
<div id="studentModal" class="fixed inset-0 bg-black bg-opacity-40 hidden items-center justify-center z-50">
  <div class="bg-white w-[350px] md:w-[420px] rounded-2xl shadow-lg px-6 py-6 relative">
    <button onclick="closeModal()" class="absolute top-3 right-4 text-2xl text-[#FFB100] font-bold">✕</button>
    <h2 class="text-center text-[20px] font-bold text-[#002E48] mb-5">Entri Siswa</h2>
    <form id="studentForm" onsubmit="addStudent(event)">
      <input id="fullName" type="text" placeholder="Full Name" class="w-full mb-3 px-4 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-yellow-300" required />

      <div class="relative mb-3">
        <span class="absolute left-3 top-2.5 text-gray-500 text-sm">(+62)</span>
        <input id="phoneNumber" type="tel" placeholder="Phone Number" class="w-full pl-14 pr-4 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-yellow-300" style="padding-left: 52px;" required />
      </div>

      <select id="class" class="w-full mb-3 px-4 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-yellow-300" required>
        <option value="7 Istambul">7 Istambul</option>
        <option value="8 Tokyo">8 Tokyo</option>
        <option value="9 Berlin">9 Berlin</option>
      </select>

      <div class="mb-3 text-sm">
        <label class="block mb-1">Gender:</label>
        <div class="flex gap-6">
          <label class="inline-flex items-center"><input type="radio" name="gender" value="Male" class="mr-2" required /> Male</label>
          <label class="inline-flex items-center"><input type="radio" name="gender" value="Female" class="mr-2" /> Female</label>
        </div>
      </div>

      <div class="mb-3 text-sm">
        <label class="block mb-1">Menu Price:</label>
        <div class="flex gap-6">
          <label class="inline-flex items-center"><input type="radio" name="price" value="Rp.16.000" class="mr-2" required /> Rp.16.000</label>
          <label class="inline-flex items-center"><input type="radio" name="price" value="Rp.20.000" class="mr-2" /> Rp.20.000</label>
        </div>
      </div>

      <textarea id="allergies" placeholder="Allergies" class="w-full mb-3 px-4 py-2 border border-gray-300 rounded-md text-sm resize-none focus:outline-none focus:ring-2 focus:ring-yellow-300"></textarea>

      <input id="note" type="text" placeholder="Additional Note.." class="w-full mb-5 px-4 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-yellow-300" />

      <button type="submit" class="w-full bg-[#22668D] text-white py-2 rounded-full text-sm font-medium hover:bg-[#1b5373] transition">
        + Tambahkan Siswa
      </button>
    </form>
  </div>
</div>

<script>
  // Mulai dari SIS-2 karena SIS-1 sudah ada di tabel awal
  let studentCounter = 2;

  function openModal() {
    document.getElementById('studentModal').classList.remove('hidden');
    document.getElementById('studentModal').classList.add('flex');
  }

  function closeModal() {
    document.getElementById('studentModal').classList.add('hidden');
    document.getElementById('studentModal').classList.remove('flex');
    document.getElementById('studentForm').reset();
  }

  function addStudent(event) {
    event.preventDefault();
    const tbody = document.getElementById('studentTableBody');
    const fullName = document.getElementById('fullName').value;
    const phoneNumber = document.getElementById('phoneNumber').value;
    const className = document.getElementById('class').value;
    const gender = document.querySelector('input[name="gender"]:checked')?.value || '';
    const price = document.querySelector('input[name="price"]:checked')?.value || '';
    const allergies = document.getElementById('allergies').value;
    const note = document.getElementById('note').value;

    // Generate ID Student otomatis
    const idStudent = 'SIS-' + studentCounter;

    // Hitung nomor urut (jumlah baris data asli, exclude baris kosong)
    let no = 1;
    for (let row of tbody.rows) {
      if (row.querySelector('td') && row.querySelector('td').innerText.trim() !== '') no++;
    }

    // Insert row sebelum baris kosong pertama (jika ada)
    let insertIndex = tbody.rows.length;
    for (let i = 0; i < tbody.rows.length; i++) {
      if (tbody.rows[i].querySelector('td') && tbody.rows[i].querySelector('td').innerText.trim() === '') {
        insertIndex = i;
        break;
      }
    }
    const row = tbody.insertRow(insertIndex);
    row.className = (no % 2 === 0) ? 'bg-[#FFFADD]' : 'bg-[#FFE39C]';
    row.innerHTML = `
      <td class="px-4 py-2 border border-[#FBA304]">${no}.</td>
      <td class="px-4 py-2 border border-[#FBA304]">${idStudent}</td>
      <td class="px-4 py-2 border border-[#FBA304]">${fullName}</td>
      <td class="px-4 py-2 border border-[#FBA304]">(+62)${phoneNumber}</td>
      <td class="px-4 py-2 border border-[#FBA304]">${className}</td>
      <td class="px-4 py-2 border border-[#FBA304]">${gender}</td>
      <td class="px-4 py-2 border border-[#FBA304]">${price}</td>
      <td class="px-4 py-2 border border-[#FBA304]">${allergies}</td>
      <td class="px-4 py-2 border border-[#FBA304]">${note}</td>
      <td class="px-4 py-2 border border-[#FBA304]">
        <div class="flex gap-2 items-center justify-center">
          <button class="bg-[#22668D] text-white px-3 py-1 rounded text-xs">Edit</button>
          <button class="bg-[#FF3235] text-white px-3 py-1 rounded text-xs" onclick="this.closest('tr').remove();">Delete</button>
        </div>
      </td>
    `;
    studentCounter++;
    closeModal();
  }
</script>

</body>
</html>