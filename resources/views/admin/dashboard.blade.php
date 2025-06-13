@if(!session('admin_logged_in'))
    <script>window.location = "{{ route('admin.login') }}";</script>
@endif

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
    <main class="flex-1 p-8 md:ml-[350px] transition-all duration-300">
        <!-- Top bar -->
        <div class="flex justify-between items-center mb-8">
            <div class="flex items-center gap-2 font-poppins font-bold text-sm ml-auto">
                <span>Admin</span>
                <div class="bg-[#FFCC70] rounded-full w-[41px] h-[41px] flex items-center justify-center text-white">
                    <img src="/img/admin/dashboard/user.png" class="w-auto h-auto" alt="user" />
                </div>
            </div>
        </div>

        <!-- Dashboard Cards -->
        <div class="grid grid-cols-2 gap-6 ml-24 max-w-3xl font-semibold font-poppins text-[64px]">
            <div class="bg-[#002E48] text-white rounded-xl p-6 flex justify-between items-center shadow-md w-[312px] h-[210px]">
                <div>
                    <p class="text-sm mb-6 mt-3 text-[22px]">Jumlah Siswa</p>
                    <h2 class="text-[54px] font-medium">62</h2>
                </div>
                <div class="flex justify-end mt-auto">
                    <img src="/img/admin/dashboard/iconramerame.png" class="w-auto h-auto" alt="icon siswa" />
                </div>
            </div>
            <div class="bg-[#002E48] text-white rounded-xl p-6 flex justify-between items-center shadow-md w-[312px] h-[210px]">
                <div>
                    <p class="text-sm mb-6 mt-3 text-[22px]">Jumlah Pesanan</p>
                    <h2 class="text-[54px] font-medium ">124</h2>
                </div>
                <div class="flex justify-end mt-auto">
                    <img src="/img/admin/dashboard/jumlahpesanan.png" class="w-auto h-auto" alt="icon pesanan" />
                </div>
            </div>
            <div class="col-span-2 bg-[#002E48] text-white rounded-xl p-6 flex flex-col justify-between shadow-md w-[385px] h-[210px] mx-auto">
                <div>
                    <p class="text-sm mb-6  mt-3 text-[22px] font-semibold">Jumlah Kehadiran Siswa</p>
                    <div class="flex items-baseline gap-2">
                        <h2 class="text-[54px] font-medium">60</h2>
                        <span class="text-sm font-semibold text-[24px]">Hari ini</span>
                    </div>
                </div>
                <div class="flex justify-end mt-auto">
                    <img src="/img/admin/dashboard/kehadiransiswa.png" class="w-auto h-auto" alt="icon kehadiran" />
                </div>
            </div>
        </div>
    </main>

    </body>
</html>
  