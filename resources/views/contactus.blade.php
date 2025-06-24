<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-[#FFFADD] min-h-screen w-full flex flex-col items-center">

    {{-- Navbar --}}
    @include('components.navbar')

    <!-- Card Container -->
    <div class="mt-[130px] flex w-[850px] h-[580px] rounded-[20px]"
        style="background: url('/img/contactus/rectangle.png') center/cover no-repeat;">
        <!-- Left: Contact Info -->
        <div class="w-1/2 p-10 flex flex-col justify-between">
            <div>
                <h2 class="text-[#FFCC70] font-inter font-semibold text-[32px]">Let's Get In Touch</h2>
                <p class="text-[11px] font-semibold mt-2 ">
                    Ada pertanyaan atau ingin pesan makanan? Kami siap membantu! <br>
                    Kirim pesanmu di sini ya!
                </p>

                <div class="mt-6 text-[11px] text-black space-y-3">
                    <div class="flex items-start gap-2">
                        <img src="/img/contactus/maps.png" alt="maps" class="w-4 h-4 mt-1">
                        <span class="font-semibold leading-snug">
                            Jalan Ganet Blok D No.7 KM 11, Tanjungpinang, Kepulauan Riau
                        </span>
                    </div>
                    <div class="flex items-center gap-2">
                        <img src="/img/contactus/email.png" alt="email" class="w-4 h-4">
                        <span class="font-semibold">endahsetyowati1971@gmail.com</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <img src="/img/contactus/telp.png" alt="telp" class="w-4 h-4">
                        <span class="font-semibold">0812-7006-2782</span>
                    </div>
                </div>

                <div class="mt-4">
                    <p class="text-xs font-bold mb-1">Connect With Us :</p>
                    <div class="flex gap-3">
                        <a href="https://www.instagram.com/bilazahirah/"><img src="/img/contactus/instagram.png" alt="Instagram" class="w-6 h-6"></a>
                        <a href="#"><img src="/img/contactus/facebook.png" alt="Facebook" class="w-6 h-6"></a>
                    </div>
                </div>
            </div>
            <div>
                <img src="/img/contactus/logocatering.png" alt="Logo" class="w-20">
            </div>
        </div>

        <!-- Right: Form -->
        <div class="w-1/2 p-10 flex flex-col justify-center  rounded-r-[20px]">
            <h2 class="text-[#FFFFFF] text-xl font-bold mb-4">Contact Us</h2>
            <form id="waForm" class="flex flex-col gap-4">
                <input type="text" id="name" placeholder="Name"
                    class="w-full p-2 rounded-lg bg-transparent border border-[#FFFFFF] text-[#FFFFFF] placeholder-[#FFFFFF] text-sm focus:outline-none"
                    required>
                <input type="text" id="phone" placeholder="Phone"
                    class="w-full p-2 rounded-lg bg-transparent border border-[#FFFFFF] text-[#FFFFFF] placeholder-[#FFFFFF] text-sm focus:outline-none"
                    required>
                <textarea id="message" placeholder="Message"
                    class="w-full p-2 h-28 rounded-lg bg-transparent border border-[#FFFFFF] text-[#FFFFFF] placeholder-[#FFFFFF] text-sm resize-none focus:outline-none"
                    required></textarea>
                <button type="submit"
                    class="mt-2 bg-white text-[#FFCC70] font-bold py-1 rounded-full w-24 hover:bg-gray-100 text-sm">Send</button>
            </form>
        </div>
    </div>

    <!-- SCRIPT UNTUK WHATSAPP -->
    <script>
    document.getElementById('waForm').addEventListener('submit', function(e) {
        e.preventDefault();
        var waNumber = "6281270062782"; // Ganti dengan nomor WA tujuan

        var name = document.getElementById('name').value.trim();
        var phone = document.getElementById('phone').value.trim();
        var message = document.getElementById('message').value.trim();

        var text = `Halo, saya ${name} (${phone}).%0A${encodeURIComponent(message)}`;
        var waLink = `https://wa.me/${waNumber}?text=${text}`;

        window.open(waLink, '_blank');
    });
    </script>
</body>
</html>