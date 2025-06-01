<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Rumah Catering</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body,
        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="min-h-screen flex overflow-hidden font-['Poppins']">

    <!-- BAGIAN KIRI -->
    <div class="login-left flex-1 bg-[#FFCC70] relative flex items-center justify-center">
        <!-- Gambar 1 (atas kiri) -->
        <div class="absolute  -translate-x-[-160px] -translate-y-[120px] z-20 flex items-start gap-2">
            <img src="/img/admin/login/atas.png" alt="hiasan"
                class="w-[60px] h-[60px] -translate-y-[30px] -translate-x-[-30px]" />
            <img src="/img/admin/login/gambar1.png" alt="Makanan 1" class="w-[120px] h-[120px] rounded-full" />
        </div>

        <!-- Gambar 2 (bawah) -->
        <div class="absolute -translate-x-[-200px] -translate-y-[-120px] z-20">
            <img src="/img/admin/login/gambar2.png" alt="Makanan 2" class="w-[120px] h-[120px] rounded-full" />
        </div>

        <!-- Teks & Gambar 3 (tengah) -->
        <div class="absolute top-1/2 left-1/2 -translate-x-[120px] -translate-y-1/2 z-30 flex items-center gap-10">
            <h1 class="text-[#002E48] text-[38px] font-extrabold drop-shadow-md whitespace-nowrap">
                RUMAH CATERING
            </h1>
            <div class="relative w-[180px] h-[180px] flex items-center justify-center">
                <!-- Lingkaran di bawah gambar -->
                <div class="absolute w-[220px] h-[220px] rounded-full bg-[#FFCC70] z-0"></div>
                <!-- Gambar 3 -->
                <img src="/img/admin/login/gambar3.png" alt="Makanan 3"
                    class="w-[180px] h-[180px] rounded-full object-cover relative z-10" />
            </div>
        </div>
    </div>

    <!-- BAGIAN KANAN -->
    <div class="login-right flex-1 bg-white flex flex-col justify-center relative px-10 pl-[140px] pb-[180px]">
        <!-- Logo pojok kanan atas -->
        <img src="/img/admin/login/logo.png" alt="Logo Sekolah" class="absolute top-6 right-10 w-[102px]" />

        <!-- Teks HELLO -->
        <div class=" ml-[160px] mb-6">
            <div>
                <h2 class="text-[48px] font-extrabold text-[#FFCC70] leading-tight">HELLO!</h2>
                <div class="w-20 h-2 bg-[#FFCC70] mt-[-10px] mb-4"></div>
            </div>
        </div>

        <!-- FORM -->
        <div class=" w-[354px] h-[55px] mx-auto space-y-4">
            <form action="{{ route('login.action') }}" method="POST">
                @csrf
                <!-- Input Username -->
                <div class="flex items-center bg-[#EDEDED] rounded-[22px] px-4 py-3 gap-3 mb-4">
                    <i class="fas fa-user text-[#002E48]"></i>
                    <input type="text" placeholder="Username" name="username" required
                        class="bg-transparent outline-none w-full text-[#002E48]" />
                    <img src="/img/admin/login/user.png" alt="username" class="w-[25px] h-[25px] mr-1" />
                </div>

                <!-- Input Password -->
                <div class="flex items-center bg-[#EDEDED] rounded-[22px] px-4 py-3 gap-3">
                    <i class="fas fa-lock text-[#002E48]"></i>
                    <input type="password" placeholder="Password" name="password" required
                        class="bg-transparent outline-none w-full text-[#002E48]" />
                    <img src="/img/admin/login/password.png" alt="password" class="w-[25px] h-[25px] mr-1" />
                </div>

                <!-- Tombol Login -->
                <div class="flex justify-center pt-2">
                    <button type="submit"
                        class="bg-gradient-to-r from-[#FFCC70] to-[#f4b948] text-white text-lg font-semibold rounded-full py-2.5 px-8 shadow-md hover:brightness-110 transition-all">
                        Login
                    </button>
                </div>
            </form>
        </div>

        <!-- Ilustrasi Ayam -->
        <img src="/img/admin/login/ilustrasiayam.png" alt="Ilustrasi Ayam" class="absolute bottom-4 right-8 w-28" />
    </div>

</body>

</html>
