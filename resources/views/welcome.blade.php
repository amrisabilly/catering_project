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
</style>
<body>
    <div>
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
                <div class="absolute top-[145px] right-[50px] ">
                    <img src="img/ayambijan.png" alt="Ayam Bijan" class="w-[388px] h-[385px]">
                </div>
                {{-- end kelas kanan --}}

                {{-- Navbar --}}
                @include('components.navbar')
                {{-- End Navbar --}}

            </div>
            <div id="menu-section" class="w-full h-full bg-[#FFFADD] min-h-screen">
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
                <div>
                    <div class="flex justify-center items-center gap-8 pt-[350px] pb-20">
                        {{-- Button Kiri --}}
                        <div class="flex items-center">
                            <button id="carousel-left" class="cursor-pointer">
                                <img src="img/buttonmenukiri.png" alt="Button Kiri" class="w-auto h-auto">
                            </button>
                        </div>
                
                        {{-- Carousel Container --}}
                        <div id="carousel-container" class="flex overflow-hidden w-[850px] items-center justify-center">
                            <div class="flex gap-5 transition-transform duration-500 ease-in-out" id="carousel-items">
                                {{-- Item 1 --}}
                                <div class="relative w-[264px] aspect-[264/363] bg-[#968e6c] rounded-xl p-3">
                                    <img src="img/bgmenu1.png" alt="Menu 1" class="w-full h-full object-contain" />
                                    <div class="absolute top-[78%] left-0 w-full text-center transform -translate-y-[50%] p-5">
                                        <span class="text-black font-bold font-[Poppins] text-[10px] tracking-[1px]">
                                            Ayam Katsu - Sayur Capcay - Pudding
                                        </span>
                                    </div>
                                </div>
                                {{-- Item 2 --}}
                                <div class="relative w-[264px] aspect-[264/363] bg-[#968e6c] rounded-xl p-3">
                                    <img src="img/bgmenu1.png" alt="Menu 2" class="w-full h-full object-contain" />
                                    <div class="absolute top-[78%] left-0 w-full text-center transform -translate-y-[50%] p-5">
                                        <span class="text-black font-bold font-[Poppins] text-[10px] tracking-[1px]">
                                            Ayam Saos Tiram - Telur Puyuh - Salad
                                        </span>
                                    </div>
                                </div>
                                {{-- Item 3 --}}
                                <div class="relative w-[264px] aspect-[264/363] bg-[#968e6c] rounded-xl p-3">
                                    <img src="img/bgmenu1.png" alt="Menu 3" class="w-full h-full object-contain" />
                                    <div class="absolute top-[78%] left-0 w-full text-center transform -translate-y-[50%] p-5">
                                        <span class="text-black font-bold font-[Poppins] text-[10px] tracking-[1px]">
                                            Ayam Goreng - Nasi Uduk - Sambal
                                        </span>
                                    </div>
                                </div>
                                {{-- Item 4 --}}
                                <div class="relative w-[264px] aspect-[264/363] bg-[#968e6c] rounded-xl p-3">
                                    <img src="img/bgmenu1.png" alt="Menu 4" class="w-full h-full object-contain" />
                                    <div class="absolute top-[78%] left-0 w-full text-center transform -translate-y-[50%] p-5">
                                        <span class="text-black font-bold font-[Poppins] text-[10px] tracking-[1px]">
                                            Ayam Bakar - Lalapan - Sambal
                                        </span>
                                    </div>
                                </div>
                                {{-- Item 5 --}}
                                <div class="relative w-[264px] aspect-[264/363] bg-[#968e6c] rounded-xl p-3">
                                    <img src="img/bgmenu1.png" alt="Menu 5" class="w-full h-full object-contain" />
                                    <div class="absolute top-[78%] left-0 w-full text-center transform -translate-y-[50%] p-5">
                                        <span class="text-black font-bold font-[Poppins] text-[10px] tracking-[1px]">
                                            Ayam Geprek - Nasi Putih - Sambal
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                        {{-- Button Kanan --}}
                        <div class="flex items-center">
                            <button id="carousel-right" class="cursor-pointer">
                                <img src="img/buttonmenukanan.png" alt="Button Kanan" class="w-auto h-auto">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Background Menu --}}
            {{-- <div class="flex justify-center items-center gap-8 pt-[350px] pb-20 bg-[#FFFADD]">
                    <div class="flex items-center">
                        <img src="img/buttonmenukiri.png" alt="Button Kiri" class="w-auto h-auto">
                    </div>

                    <div>
                        
                    </div>

                    <div class="relative w-[264px] aspect-[264/363]">
                        <div class="absolute top-[78%] left-0 w-full text-center transform -translate-y-[50%]">
                            <span class="text-black font-bold font-[Poppins] text-[10px] tracking-[1px]">
                                Ayam Katsu - Sayur Capcay - Pudding
                            </span>
                        </div>
                        <svg class="absolute top-[-75px] left-0 w-full h-full" viewBox="0 0 264 264">
                            <path id="menu1-path" d="M132,132 m-100,0 a100,100 0 1,1 200,0 a100,100 0 1,1 -200,0"
                                fill="none" />
                            <text font-family="Poppins" font-size="14" font-weight="bold" fill="#002E48"
                                letter-spacing="3px">
                                <textPath href="#menu1-path" text-anchor="middle" startOffset="25%">
                                    AYAM KATSU
                                </textPath>
                            </text>
                        </svg>
                        <img src="img/bgmenu1.png" alt="Menu 1" class="w-full h-full object-contain" />
                    </div>

                    <div class="relative w-[264px] aspect-[264/353]">
                        <svg class="absolute top-[-60px] left-0 w-full h-full" viewBox="0 0 264 264">
                            <path id="menu2-path" d="M132,132 m-100,0 a100,100 0 1,1 200,0 a100,100 0 1,1 -200,0"
                                fill="none" />
                            <text font-family="Poppins" font-size="14" font-weight="bold" fill="#002E48"
                                letter-spacing="3px">
                                <textPath href="#menu2-path" text-anchor="middle" startOffset="25%">
                                    AYAM SAOS TIRAM
                                </textPath>
                            </text>
                        </svg>
                        <img src="img/bgmenu2.png" alt="Menu 2" class="w-full h-full object-contain" />
                    </div>

                    <div class="relative w-[264px] aspect-[264/363]">
                        <svg class="absolute top-[-70px] left-0 w-full h-full" viewBox="0 0 264 264">
                            <path id="menu3-path" d="M132,132 m-100,0 a100,100 0 1,1 200,0 a100,100 0 1,1 -200,0"
                                fill="none" />
                            <text font-family="Inter" font-size="14" font-weight="bold" fill="#002E48"
                                letter-spacing="3px">
                                <textPath href="#menu3-path" text-anchor="middle" startOffset="25%">
                                    TELUR PUYUH
                                </textPath>
                            </text>
                        </svg>
                        <img src="img/bgmenu3.png" alt="Menu 3" class="w-full h-full object-contain" />
                    </div>

                    <div class="flex items-center">
                        <img src="img/buttonmenukanan.png" alt="Button Kanan" class="w-auto h-auto">
                    </div>
                </div> --}}
            {{-- End Background Menu --}}
            {{-- Button Our Menu --}}
            <div class="flex justify-center bg-[#FFFADD] pb-10 ml">
                <a href="/order" class="relative">
                    <img src="img/buttonourmenu.png" alt="Button Our Menu" class="w-auto h-auto">
                    <button
                        class="transition duration-150 ease-in-out absolute inset-0 ml-[30px] flex items-center justify-center text-white text-[16px] font-bold font-poppins">
                        OUR MENU
                    </button>
                </a>
            </div>
            {{-- End Button Our Menu --}}
            {{-- footer --}}
            <div class="mt-0 w-full h-[310px] bg-[#FFCC70] flex items-start pt-[50px]">
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
            </div>


            <div class="w-full h-[80px] bg-[#002E48] flex items-center justify-center">
                <div class="flex items-center">
                    <span class="text-white font-[poppins] text-[14px]">© 2025 Rumah Catering Tanjungpinang. All
                        rights reserved.</span>
                </div>
            </div>
            {{-- end footer --}}


        </div>
    </div>
</body>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const carouselContainer = document.getElementById('carousel-container');
        const carouselItems = document.getElementById('carousel-items');
        const leftButton = document.getElementById('carousel-left');
        const rightButton = document.getElementById('carousel-right');

        let currentIndex = 0;
        const itemWidth = 264; // Lebar setiap item (px)
        const totalItems = carouselItems.children.length;

        leftButton.addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
                carouselItems.style.transform = `translateX(-${currentIndex * itemWidth}px)`;
            }
        });

        rightButton.addEventListener('click', () => {
            if (currentIndex < totalItems - 3) { // 3 adalah jumlah item yang terlihat
                currentIndex++;
                carouselItems.style.transform = `translateX(-${currentIndex * itemWidth}px)`;
            }
        });
    });
</script>
</html>
