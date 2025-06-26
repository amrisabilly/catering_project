<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumah Catering Tanjungpinang</title>
    @vite('resources/css/app.css')
</head>
<style>
    html {
        scroll-behavior: smooth
    }
    /* Animasi untuk gambar Ayam Saos Tiram */
    @keyframes rotate {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }
        #ayam-saos-tiram {
            animation: rotate 20s linear infinite; /* Durasi 20 detik, linear, berulang tanpa henti */
        }
</style>
<body class="flex flex-col min-h-screen" style="margin: 0; padding: 0; height: 100%">
    <div>
        <div class="bg-transparent w-full h-40 flex items-center justify-between px-6 rounded-b-lg fixed top-0 left-[-0px] z-50">
            {{-- Logo --}}
            <img src="img/logocatering.png" alt="Logo Catering" class="w-[100px] h-[100px] ml-6">
        </div>
        <div class="flex-grow">
            <div class="bg-[#FFFADD] w-full h-screen bg-cover">
                <div class="w-full h-full bg-no-repeat top-[571px] bg-right bg-contain"
                    style="background-image: url('img/bglogo.png');">
                    <p class="absolute font-poppins top-[431px] left-[106px] w-auto h-auto text-[#002]">
                        <span> <b>Siap menemani hari Anda dengan menu spesial, praktis, dan selalu fresh!</b></span> <br>
                        Dibuat dengan bahan berkualitas dan cita rasa terbaik, kami hadir untuk<br>
                        memenuhi kebutuhan kuliner Anda, baik untuk sehari-hari maupun acara<br>spesial.
                    </p>
                    {{-- kelas kiri --}}
                    <div class="relative w-full h-full">
                        <img src="img/teksgoodtaste.png" alt=""
                            class="absolute top-[298px] left-[106px] w-auto h-auto"> {{-- Posisi sesuai Figma --}}
                    </div>
                    {{-- Button Order Now --}}
                    <div class="absolute top-[551px] left-[106px]">
                        <a href="/order"
                            class="flex items-center justify-center bg-[#22668D] rounded-[55px] shadow-md w-[197px] h-[62px]">
                            <img src="img/iconorder.png" alt="Order Icon" class="w-[46px] h-[46px] mr-2">
                            <span class="text-white text-[16px] font-bold font-poppins">ORDER NOW</span>
                        </a>
                    </div>
                    {{-- end button ordernow --}}
                    {{-- kelas kanan --}}
                    <div class="absolute top-[145px] right-[80px] ">
                        <img id="ayam-saos-tiram" src="img/ayamsaostiram.png" alt="Ayam Saos Tiram" class="w-[420px] h-auto">
                    </div>
                    {{-- end kelas kanan --}}
    
                    {{-- Navbar --}}
                    @include('components.navbar')
                    {{-- End Navbar --}}
    
                </div>
                <div class="w-full h-auto bg-[#FFFADD] py-[100px] pt-[150px] pb-[20px] overflow-visible">
                    <div dir="rtl">
                        <div
                            class="absolute top-[786px] left-[20px] w-[341px] h-[120px] flex items-center justify-center rounded-[19px] bg-[#C3D2C7]">
                            <p>
                                <span class="text-black font-[poppins] mt-4 block">Jalan Ganet Indah Blok D nomor
                                    7<br>Tanjungpinang, Kepulauan Riau</span>
                            </p>
                        </div>
                        <div
                            class="absolute top-[765px] left-[-39px] w-[223px] h-[52px] flex items-center justify-center rounded-s-[19px] bg-[#22668D] opacity-80">
                            <p font-family="Inter" text-[16px] class="text-white font-bold ml-16">
                                <span>LOCATION</span>
                            </p>
                        </div>
                    </div>
                    <div class="absolute top-[1000px] bg-left">
                        <img src="img/linemenu.png" alt="Line Menu" class="w-auto h-auto">
                    </div>
    
                    {{-- Menu --}}
                    <div id="menu-section">
                        <div class="relative w-[850px] mx-auto">
                            {{-- Button Kiri --}}
                            <div class="flex items-center">
                                <button id="carousel-left" class="absolute left-[-50px] top-[400px] -translate-y-1/2 z-10">
                                    <img src="img/buttonmenukiri.png" alt="Button Kiri" class="w-auto h-auto">
                                </button>
                            </div>
                            {{-- Button Kanan --}}
                            <div class="flex items-center">
                                <button id="carousel-right" class="absolute right-[-50px] top-[400px] -translate-y-1/2 z-10">
                                    <img src="img/buttonmenukanan.png" alt="Button Kanan" class="w-auto h-auto">
                                </button>
                            </div>
                    
                            {{-- Carousel Container --}}
                            <div id="carousel-container" class="flex overflow-hidden  w-[850px] items-center justify-center relative pt-[110px] pb-[50px] mt-16">
                                {{-- Carousel Items --}}
                                <div class="flex gap-5 transition-transform duration-500 ease-in-out" id="carousel-items">
                                    {{-- Item 1 --}}
                                    <div class="relative w-[264px] aspect-[264/300] bg-[#FFFADD] rounded-[50px] p-3 drop-shadow-[1px_14px_8px_rgba(0,0,0,0.25)] overflow-visible mt-10">
                                        {{-- Gambar Menu --}}
                                        <img src="img/bgmenu1.png" alt="Menu 1" class="w-full h-full object-contain" />
    
                                        {{-- SVG untuk teks melengkung --}}
                                        <svg class="absolute top-[-65px] left-0 w-full h-full z-50 pointer-events-none" viewBox="0 0 264 264">
                                            <path id="menu1-path" d="M132,132 m-100,0 a100,100 0 1,1 200,0 a100,100 0 1,1 -200,0" fill="none" />
                                            <text font-family="Poppins" font-size="14" font-weight="bold" fill="#002E48" letter-spacing="3px">
                                                <textPath href="#menu1-path" text-anchor="middle" startOffset="25%">
                                                    LELE GORENG
                                                </textPath>
                                            </text>
                                        </svg>
    
                                        {{-- Teks Deskripsi --}}
                                        <div class="absolute top-[80%] left-0 w-full text-center transform -translate-y-[50%] p-5">
                                            <span class="text-black font-semibold font-[Poppins] text-[10px]">
                                                
                                            </span>
                                            <span class="text-black font-semibold font-[Poppins] text-[20px] mt-[5px] block" style="opacity: 0.82; text-shadow: 0px 4px 8px rgba(0, 0, 0, 0.25);">
                                                RP. 20.000
                                            </span>
                                        </div>
                                    </div>                   
    
                                    {{-- Item 2 --}}
                                    <div class="relative w-[264px] aspect-[264/300] bg-[#FFFADD] rounded-[50px] p-3 drop-shadow-[1px_14px_8px_rgba(0,0,0,0.25)] overflow-visible mt-10">
                                        {{-- Gambar Menu --}}
                                        <img src="img/bgmenu2.png" alt="Menu 2" class="w-full h-full object-contain" />
                                    
                                        {{-- SVG untuk teks melengkung --}}
                                        <svg class="absolute top-[-65px] left-0 w-full h-full z-50 pointer-events-none" viewBox="0 0 264 264">
                                            <path id="menu2-path" d="M132,132 m-100,0 a100,100 0 1,1 200,0 a100,100 0 1,1 -200,0" fill="none" />
                                            <text font-family="Poppins" font-size="14" font-weight="bold" fill="#002E48" letter-spacing="3px">
                                                <textPath href="#menu2-path" text-anchor="middle" startOffset="25%">
                                                    LELE GORENG
                                                </textPath>
                                            </text>
                                        </svg>
                                    
                                        {{-- Teks Deskripsi --}}
                                        <div class="absolute top-[80%] left-0 w-full text-center transform -translate-y-[50%] p-5">
                                            <span class="text-black font-semibold font-[Poppins] text-[10px]">
                                                Lele Goreng - Mie Goreng - Pisang
                                            </span>
                                            <span class="text-black font-semibold font-[Poppins] text-[20px] mt-[5px] block" style="opacity: 0.82; text-shadow: 0px 4px 8px rgba(0, 0, 0, 0.25);">
                                                RP. 20.000
                                            </span>
                                        </div>
                                    </div>                                
                                    
                                    {{-- Item 3 --}}
                                    <div class="relative w-[264px] aspect-[264/400] bg-[#FFFADD] rounded-[50px] p-3 drop-shadow-[1px_14px_8px_rgba(0,0,0,0.25)] overflow-visible mt-10">
                                        {{-- Gambar Menu --}}
                                        <img src="img/bgmenu3.png" alt="Menu 3" class="w-full h-full object-contain" />
                                    
                                        {{-- SVG untuk teks melengkung --}}
                                        <svg class="absolute top-[-65px] left-0 w-full h-full z-50 pointer-events-none" viewBox="0 0 264 264">
                                            <path id="menu3-path" d="M132,132 m-100,0 a100,100 0 1,1 200,0 a100,100 0 1,1 -200,0" fill="none" />
                                            <text font-family="Poppins" font-size="14" font-weight="bold" fill="#002E48" letter-spacing="3px">
                                                <textPath href="#menu3-path" text-anchor="middle" startOffset="25%">
                                                    AYAM KATSU
                                                </textPath>
                                            </text>
                                        </svg>
                                    
                                        {{-- Teks Deskripsi --}}
                                        <div class="absolute top-[80%] left-0 w-full text-center transform -translate-y-[50%] p-5">
                                            <span class="text-black font-semibold font-[Poppins] text-[10px]">
                                                Ayam Katsu - Sayur Capcay - Pudding
                                            </span>
                                            <span class="text-black font-semibold font-[Poppins] text-[20px] mt-[5px] block" style="opacity: 0.82; text-shadow: 0px 4px 8px rgba(0, 0, 0, 0.25);">
                                                RP. 20.000
                                            </span>
                                        </div>
                                    </div>
                                    
                                    {{-- Item 4 --}}
                                     <div class="relative w-[264px] aspect-[264/300] bg-[#FFFADD] rounded-[50px] p-3 drop-shadow-[1px_14px_8px_rgba(0,0,0,0.25)] overflow-visible mt-10">
                                        {{-- Gambar Menu --}}
                                        <img src="img/bgmenu4.png" alt="Menu 4" class="w-full h-full object-contain" />
    
                                        {{-- SVG untuk teks melengkung --}}
                                        <svg class="absolute top-[-65px] left-0 w-full h-full z-50 pointer-events-none" viewBox="0 0 264 264">
                                            <path id="menu4-path" d="M132,132 m-100,0 a100,100 0 1,1 200,0 a100,100 0 1,1 -200,0" fill="none" />
                                            <text font-family="Poppins" font-size="14" font-weight="bold" fill="#002E48" letter-spacing="3px">
                                                <textPath href="#menu4-path" text-anchor="middle" startOffset="25%">
                                                    AYAM SAOS TIRAM
                                                </textPath>
                                            </text>
                                        </svg>
    
                                        {{-- Teks Deskripsi --}}
                                        <div class="absolute top-[80%] left-0 w-full text-center transform -translate-y-[50%] p-5">
                                            <span class="text-black font-semibold font-[Poppins] text-[10px]">
                                                Ayam Saos Tiram - Kol Tumis  - Pudding
                                            </span>
                                            <span class="text-black font-semibold font-[Poppins] text-[20px] mt-[5px] block" style="opacity: 0.82; text-shadow: 0px 4px 8px rgba(0, 0, 0, 0.25);">
                                                RP. 20.000
                                            </span>
                                        </div>
                                    </div>
                                     {{-- Item 5 --}}
                                     <div class="relative w-[264px] aspect-[264/300] bg-[#FFFADD] rounded-[50px] p-3 drop-shadow-[1px_14px_8px_rgba(0,0,0,0.25)] overflow-visible mt-10">
                                        {{-- Gambar Menu --}}
                                        <img src="img/bgmenu5.png" alt="Menu 5" class="w-full h-full object-contain" />
    
                                        {{-- SVG untuk teks melengkung --}}
                                        <svg class="absolute top-[-65px] left-0 w-full h-full z-50 pointer-events-none" viewBox="0 0 264 264">
                                            <path id="menu5-path" d="M132,132 m-100,0 a100,100 0 1,1 200,0 a100,100 0 1,1 -200,0" fill="none" />
                                            <text font-family="Poppins" font-size="14" font-weight="bold" fill="#002E48" letter-spacing="3px">
                                                <textPath href="#menu5-path" text-anchor="middle" startOffset="25%">
                                                    TELUR PUYUH
                                                </textPath>
                                            </text>
                                        </svg>
    
                                        {{-- Teks Deskripsi --}}
                                        <div class="absolute top-[80%] left-0 w-full text-center transform -translate-y-[50%] p-5">
                                            <span class="text-black font-semibold font-[Poppins] text-[10px]">
                                                Telur Puyuh Sambal - Kangkung
                                            </span>
                                            <span class="text-black font-semibold font-[Poppins] text-[20px] mt-[5px] block" style="opacity: 0.82; text-shadow: 0px 4px 8px rgba(0, 0, 0, 0.25);">
                                                RP. 20.000
                                            </span>
                                        </div>
                                    </div>        
                                    {{--end menu item--}}
                        </div>
                    </div>
                </div>
                {{-- End Menu --}}

                {{-- Button Our Menu --}}
                <div class="flex justify-center bg-[#FFFADD] pb-20 pt-10">
                    <a href="/order" class="relative">
                        <img src="img/buttonourmenu.png" alt="Button Our Menu" class="w-auto h-auto">
                        <button
                            class="transition duration-150 ease-in-out absolute inset-0 ml-[30px] flex items-center justify-center text-white text-[16px] font-bold font-poppins">
                            OUR MENU
                        </button>
                    </a>
                </div>
                {{-- End Button Our Menu --}}
        </div>
        </div>
        {{-- footer --}}
        <footer class="w-full h-auto">
            <div class="w-full h-[270px] bg-[#FFCC70] flex items-start pt-[40px]">
                <div class="pl-[100px]">
                    <span class="text-black font-bold font-[inter] text-[20px]">RUMAH CATERING TANJUNGPINANG</span>
                </div>
                <div class="pl-[80px] flex flex-col">
                    <span class="text-black font-semibold font-[inter] text-[16px] mb-2">General</span>
                    <a href="#" class="text-black font-[inter] text-[14px] pb-2 pl-2 hover:underline">Home</a>
                    <a href="#menu-section"
                        class="text-black font-[inter] text-[14px] pb-2 pl-2 hover:underline">Menu</a>
                    <a href="#" class="text-black font-[inter] text-[14px] pb-2 pl-2 hover:underline">Order</a>
                    <a href="#" class="text-black font-[inter] text-[14px] pb-2 pl-2 hover:underline">Catering</a>
                    <a href="#" class="text-black font-[inter] text-[14px] pb-2 pl-2 hover:underline">About
                        Us</a>
                </div>
                <div class="pl-[50px] flex flex-col">
                    <span class="text-black font-semibold font-[inter] text-[16px] mb-2">Contact Us</span>
                    <div class="flex items-center">
                        <img src="img/logotelp.png" alt="" class="w-[15px] h-[15px] mr-2">
                        <span class="text-black font-[inter] text-[14px]">(+62)81368375553</span>
                    </div>
                    <div class="flex items-center">
                        <img src="img/logoemail.png" alt="" class="w-[15px] h-[15px] mr-2">
                        <span class="text-black font-[inter] text-[14px]">endahsetyowati1971@gmail.com</span>
                    </div>
                </div>
                <div class="ml-[7em]">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d370.79706591135783!2d104.51444532343152!3d0.9241675969937215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sjalan%20perumahan%20ganden%20indah%20blok%20d%20no%207%20km%2011%20tanjung%20pinang%20timur%20d%20no!5e0!3m2!1sid!2sid!4v1748791223741!5m2!1sid!2sid" width="350" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="w-full h-[80px] bg-[#002E48] flex items-center justify-center">
                <div class="flex items-center">
                    <span class="text-white font-[poppins] text-[14px]">© 2025 Rumah Catering Tanjungpinang. All
                        rights reserved.</span>
                </div>
            </div>
        </footer>
        {{-- end footer --}}
    </div>
</body>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const carouselItems = document.getElementById('carousel-items');
        const leftButton = document.getElementById('carousel-left');
        const rightButton = document.getElementById('carousel-right');

        let currentIndex = 2; // Indeks awal (menu 3 berada di tengah)
        const itemWidth = 264 + 20; // Lebar item + gap antar item
        const visibleItems = 3; // Jumlah item yang terlihat
        const totalItems = carouselItems.children.length; // Total jumlah item

        // Fungsi untuk memperbarui posisi carousel
        const updateCarousel = () => {
            // Hitung posisi transform berdasarkan indeks
            const offset = (currentIndex - 1) * itemWidth; // (currentIndex - 1) karena menu 3 di tengah
            carouselItems.style.transform = `translateX(-${offset}px)`;
        };

        // Klik tombol kanan = geser ke kiri (tambah index)
        rightButton.addEventListener('click', () => {
            if (currentIndex < totalItems - 1) {
                currentIndex++;
                updateCarousel();
            } else {
                console.log('Tidak bisa bergeser lebih jauh ke kanan');
            }
        });

        // Klik tombol kiri = geser ke kanan (kurangi index)
        leftButton.addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
                updateCarousel();
            } else {
                console.log('Tidak bisa bergeser lebih jauh ke kiri');
            }
        });

        // Inisialisasi posisi carousel
        updateCarousel();

        // Debugging
        console.log('Carousel initialized with', totalItems, 'items');
    });
</script>
</html>