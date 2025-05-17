<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-[#FFFADD] w-full h-screen flex flex-col items-center">
    <!-- Back button & title -->
    <div class="absolute top-[59px] left-[60px] flex flex-col items-start">
        <a href="/">
            <img src="img/catering/backbutton.png" alt="back-button" class="w-auto h-auto">
        </a>
    </div>

    {{-- Navbar --}}
    @include('components.navbar')

    <!-- Rectangle Putih -->
    <div class="relative flex items-center justify-center mt-[145px]">
        <!-- Gambar Rectangle -->
        <img src="img/contactus/rectangle.png" alt="contactus" class="w-auto h-[540px]">

        <!-- Teks di Atas Gambar -->
        <span class="absolute top-[40px] left-[40px] font-inter font-semibold text-[32px] text-[#FFCC70]">
            Let's Get In Touch
        </span>
        <span class="absolute top-[100px] left-[40px] font-inter font-semibold text-[10px]">
            Ada pertanyaan atau ingin pesan makanan? Kami siap membantu! <br>Kirim pesanmu di sini ya!
        </span>
    </div>
</body>

</html>