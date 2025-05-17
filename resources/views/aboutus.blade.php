<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-[#FFFADD] w-full h-screen flex flex-col items-center">
    <!-- Back button & title -->
    <div class="absolute top-[59px] left-[60px] flex flex-col items-start">
        <a href="/">
            <img src="img/catering/backbutton.png" alt="back-button" class="w-auto h-auto">
        </a>
        <img src="img/aboutus/tekscatering.png" alt="teks-catering" class=" mt-[-70px] w-[260px] h-auto">
        <span class="font-inter font-semibold mt-[-80px]">Short Story- <span class="italic">Dari Dapur Kecil Menuju Kepercayaan Besar</span></span>
        <br>
        
    </div>

    {{-- Navbar --}}
    @include('components.navbar')
</body>

</html>