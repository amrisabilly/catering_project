<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catering Menu</title>
    <link rel="icon" type="image/png" href="{{ asset('img/logocatering.png') }}">
    @vite('resources/css/app.css')
</head>

<body class="bg-[#FFFADD] w-full h-screen flex flex-col items-center">
    <!-- Back button & title -->
    <div class="absolute top-[59px] left-[60px] flex items-center">
        <a href="/">
            <img src="img/catering/backbutton.png" alt="back-button" class="w-auto h-auto">
        </a>
        <span class="ml-4 text-black font-inter font-bold text-[20px]" style="opacity: 0.82; text-shadow: 0px 4px 8px rgba(0, 0, 0, 0.25);">ORDER MENU</span>
    </div>

    {{-- Navbar --}}
    @include('components.navbar')

    {{-- Rectangle Buttons --}}
    <div class="flex flex-row items-center justify-center mt-[200px] gap-20">
        <!-- Rectangle 1 -->
        <a href="/formdaftar" class="w-[326px] h-[350px] bg-[#002E48] rounded-[20px] shadow-md flex flex-col items-center justify-center hover:bg-[#8ECDDD] transition duration-300">
            <span class="text-white font-bold text-[18px] text-center">FORM PENDAFTARAN<br>CATERING SEKOLAH</span>
            <img src="img/catering/formpelanggan.png" alt="form-pelanggan" class="w-auto h-[200px] mb-[10px]">
        </a>

        <!-- Rectangle 2: Langsung ke WhatsApp -->
        <a 
            href="https://wa.me/6281270062782?text=Assalamualaikum Bu%2C%20saya%20mau%20konfirmasi%20izin%20atau%20sakit%20untuk%20anak%20saya%2C%20[isi%20nama%20di%20sini]%20di%20kelas%20[isi%20kelas%20di%20sini]%20terimakasih bu."
            target="_blank"
            class="w-[326px] h-[350px] bg-[#002E48] rounded-[20px] shadow-md flex flex-col items-center justify-center hover:bg-[#8ECDDD] transition duration-300"
        >
            <span class="text-white font-bold text-[18px]">KONFIRMASI IZIN/SAKIT</span>
            <img src="img/catering/formizin.png" alt="form-izin" class="w-auto h-[220px] mb-[5px] mt-2">
        </a>
    </div>
    <div>
        <img src="img/catering/gelombangbawah.png" alt="gelombang-bawah" class="absolute bottom-0 left-0 w-[260px] h-auto">
        <img src="img/catering/iconkacang.png" alt="iconkacang" class="absolute bottom-0 right-6 w-[300px] h-auto">
    </div>
</body>

</html>