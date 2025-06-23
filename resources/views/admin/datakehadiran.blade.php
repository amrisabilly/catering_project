<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Laporan Kehadiran Siswa</title>
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

  <!-- Judul -->
  <div class="bg-white rounded-xl shadow-xl px-8 py-4 flex items-center justify-center mb-6">
    <h1 class="text-2xl md:text-[28px] font-bold text-[#002E48] text-center w-full flex justify-center">
      Laporan Kehadiran Siswa
    </h1>
    <button 
          class="bg-[#FFCC70] text-black py-2 px-6 rounded-[20px] w-[180px] cursor-pointer font-semibold text-sm hover:bg-yellow-400 mb-2"
          onclick="openEditModal(this)"
          data-id="SIS-1"
          data-fullname="Zahirah Salsabila"
          data-attendance="Present"
        >
          Edit Attendance
    </button>
  </div>

  <!-- Tabel Kehadiran -->
  <div class="bg-white rounded-xl shadow-xl px-6 py-4 relative z">
    <div class="overflow-x-auto">
      <table id="studentTable" class="min-w-full border border-[#FBA304] text-sm text-center">
        <thead>
          <tr class="bg-[#FFFADD] text-gray-800">
            <th class="px-4 py-2 border border-[#FBA304]">No.</th>
            <th class="px-4 py-2 border border-[#FBA304]">ID Student</th>
            <th class="px-4 py-2 border border-[#FBA304]">Full Name</th>
            <th class="px-4 py-2 border border-[#FBA304]">Phone Number</th>
            <th class="px-4 py-2 border border-[#FBA304]">Class</th>
            <th class="px-4 py-2 border border-[#FBA304]">Attendance</th>
            <th class="px-4 py-2 border border-[#FBA304]">Cost/Day</th>
            <th class="px-4 py-2 border border-[#FBA304]">Total</th>
          </tr>
        </thead>
        <tbody id="studentTableBody">
          <tr class="bg-[#FFE39C]">
            <td class="px-4 py-2 border border-[#FBA304]">1.</td>
            <td class="px-4 py-2 border border-[#FBA304]">SIS-1</td>
            <td class="px-4 py-2 border border-[#FBA304]">Zahirah Salsabila</td>
            <td class="px-4 py-2 border border-[#FBA304]">(+62)81368375553</td>
            <td class="px-4 py-2 border border-[#FBA304]">7 Istambul</td>
            <td class="px-4 py-2 border border-[#FBA304]">29</td>
            <td class="px-4 py-2 border border-[#FBA304]">Rp.20.000</td>
            <td class="px-4 py-2 border border-[#FBA304]">Rp.580.000</td>
          </tr>
          @for ($i = 0; $i < 4; $i++)
          <tr class="{{ $i % 2 == 0 ? 'bg-[#FFFADD]' : 'bg-[#FFE39C]' }}">
            @for ($j = 0; $j < 8; $j++)
              <td class="px-4 py-2 border border-[#FBA304]">&nbsp;</td>
            @endfor
          </tr>
          @endfor
        </tbody>
      </table>
    </div>
    <!-- Bagian bawah tabel -->
    <div class="flex justify-between items-start mt-8 w-full">
      <!-- Kiri-->
        <div class="flex gap-3 w-[452px]">
          <button class="flex items-center justify-center cursor-pointer bg-[#2CAA6B] hover:bg-[#23995f] text-white text-sm font-medium py-2 px-4 rounded-[20px] w-[220px]">
            <img src="/img/admin/datakehadiran/excell.png" alt="Excel" class="w-auto h-auto mr-2" />
            Export to Excel
          </button>
          <button class="flex items-center justify-center cursor-pointer bg-[#A3A3A3] hover:bg-[#8c8c8c] text-white text-sm font-medium py-2 px-4 rounded-[20px] w-[220px]">
            <img src="/img/admin/datakehadiran/pdf.png" alt="PDF" class="w-auto h-auto mr-2" />
            Export to PDF
          </button>
        </div>
      <!-- Kanan: Total Overall Cost -->
      <div class="text-[18px] font-semibold text-gray-800 text-right min-w-[220px]">
        Total Overall Cost: <span class="text-[#22668D]">Rp. 580.000</span>
      </div>
    </div>
  </div>

<!-- Icon dekorasi -->
<img src="/img/admin/datasiswa/icon_kacang.png" alt="icon kacang" class="fixed right-4 bottom-4 w-[240px] h-[240px] z-[1]" />
<img src="/img/admin/datasiswa/gelombangbawah.png" alt="gelombang bawah" class="fixed left-0 bottom-0 w-[220px] h-auto z-[-1]" />

<!-- Modal Edit Attendance -->
<div id="editAttendanceModal" class="fixed inset-0 bg-black bg-opacity-40 hidden items-center justify-center z-50 font-[Poppins]">
  <div class="bg-white w-[700px] rounded-2xl shadow-lg px-8 py-8 relative">
    <!-- Tombol Close -->
    <button onclick="closeEditModal()" class="absolute top-3 right-4 text-2xl text-[#FFB100] font-bold">✕</button>

    <!-- Title -->
    <h2 class="text-center text-2xl font-bold text-sky-900 mb-6">EDIT ATTENDANCE</h2>

    <!-- Filter Date dan Class -->
    <div class="flex flex-wrap gap-4 items-center mb-6">
      <!-- Date Picker -->
      <div class="flex items-center gap-2 shadow px-4 py-2 rounded-md bg-white">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3M16 7V3M4 11h16M4 19h16M4 15h16" />
        </svg>
        <input type="date" value="2025-04-17" class="outline-none" />
      </div>

      <!-- Class Dropdown -->
      <div class="flex items-center gap-2 shadow px-4 py-2 rounded-md bg-white">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6h18M3 12h18M3 18h18" />
        </svg>
        <select id="class" class="outline-none bg-white">
          <option value="7 Istambul">7 Alexandria</option>
          <option value="7 Istambul">7 Granada</option>
          <option value="7 Istambul">7 Istambul</option>
          <option value="8 Tokyo">8 Baghdad</option>
          <option value="9 Berlin">8 Cordova</option>
          <option value="9 Berlin">8 Damaskus</option>
          <option value="9 Berlin">8 Kairo</option>
          <option value="10 Paris">9 Gazza</option>
          <option value="10 Paris">9 Makkah</option>
        </select>
      </div>

      <!-- Show Data Button -->
      <button class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-md font-semibold">
        Show Data
      </button>
    </div>

    <!-- Table pada Modal Edit Attendance -->
    <div class="overflow-x-auto">
      <table class="min-w-full border border-[#FBA304] text-sm text-center">
        <thead>
          <tr class="bg-[#FFFADD] text-gray-800">
            <th class="px-4 py-2 border border-[#FBA304]">No.</th>
            <th class="px-4 py-2 border border-[#FBA304]">ID Student</th>
            <th class="px-4 py-2 border border-[#FBA304]">Full Name</th>
            <th class="px-4 py-2 border border-[#FBA304]">Attendance</th>
          </tr>
        </thead>
        <tbody>
          <tr class="bg-[#FFE39C]">
            <td class="px-4 py-2 border border-[#FBA304]">1.</td>
            <td class="px-4 py-2 border border-[#FBA304]" id="modal-id">SIS-1</td>
            <td class="px-4 py-2 border border-[#FBA304]" id="modal-name">Zahirah Salsabila</td>
            <td class="px-4 py-2 border border-[#FBA304]">
              <label class="mr-4">
                <input type="radio" name="attendance1" id="modal-present" class="accent-green-500" /> Present
              </label>
              <label>
                <input type="radio" name="attendance1" id="modal-excused" class="accent-yellow-500" /> Excused
              </label>
            </td>
          </tr>
          <tr class="bg-[#FFFADD]">
            <td class="px-4 py-2 border border-[#FBA304]">&nbsp;</td>
            <td class="px-4 py-2 border border-[#FBA304]">&nbsp;</td>
            <td class="px-4 py-2 border border-[#FBA304]">&nbsp;</td>
            <td class="px-4 py-2 border border-[#FBA304]">&nbsp;</td>
          </tr>
          <tr class="bg-[#FFE39C]">
            <td class="px-4 py-2 border border-[#FBA304]">&nbsp;</td>
            <td class="px-4 py-2 border border-[#FBA304]">&nbsp;</td>
            <td class="px-4 py-2 border border-[#FBA304]">&nbsp;</td>
            <td class="px-4 py-2 border border-[#FBA304]">&nbsp;</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Pagination -->
    <div class="flex mt-4 space-x-1">
      <button class="px-3 py-1 border rounded text-gray-700 bg-white">Previous</button>
      <button class="px-3 py-1 bg-sky-900 text-white rounded">1</button>
      <button class="px-3 py-1 border rounded text-gray-700 bg-white">2</button>
      <button class="px-3 py-1 border rounded text-gray-700 bg-white">3</button>
      <button class="px-3 py-1 border rounded text-gray-700 bg-white">Next</button>
    </div>

    <!-- Save Button -->
    <div class="mt-6 text-right">
      <button 
        class="bg-sky-900 text-white px-5 py-2 rounded-md font-semibold hover:bg-sky-800"
        onclick="closeEditModal()"
        type="button"
      >
        Save Attendance
      </button>
    </div>
</div>

<script>
 function openEditModal(btn) {
  document.getElementById('modal-id').innerText = btn.getAttribute('data-id');
  document.getElementById('modal-name').innerText = btn.getAttribute('data-fullname');
  let attendance = btn.getAttribute('data-attendance');
  document.getElementById('modal-present').checked = attendance === 'Present';
  document.getElementById('modal-excused').checked = attendance === 'Excused';
  document.getElementById('editAttendanceModal').classList.remove('hidden');
  document.getElementById('editAttendanceModal').classList.add('flex');
}
function closeEditModal() {
  document.getElementById('editAttendanceModal').classList.add('hidden');
  document.getElementById('editAttendanceModal').classList.remove('flex');
}
</script>
</body>
</html>