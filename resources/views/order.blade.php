<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumah Catering Tanjungpinang</title>
    @vite('resources/css/app.css')
</head>

<body>
        <div class="bg-[#FFFADD] w-full h-screen flex">
            <div class="flex-1">
            <!-- Back button & title -->
            <div class="absolute top-[59px] left-[60px] flex items-center">
                <a href="/">
                    <img src="img/order/backbutton.png" alt="back-button" class="w-auto h-auto">
                </a>
                <span class="ml-4 text-black font-inter font-bold text-[20px]" style="opacity: 0.82; text-shadow: 0px 4px 8px rgba(0, 0, 0, 0.25);">ORDER MENU</span>
            </div>
    
            <!-- Toggle Segment -->
            <div class="absolute top-[100px] left-[35%] transform -translate-x-1/2 w-[300px] h-[48px] bg-[#F0EEE3] rounded-full flex items-center px-1 shadow-md">
                <div id="slider" class="absolute top-1 left-1 w-[calc(50%-8px)] h-[40px] bg-white rounded-full shadow transition-all duration-300"></div>
                <button id="mainCourseBtn" onclick="showMainCourse()" class="w-1/2 z-10 text-black font-inter font-bold transition-colors duration-300">Main Course</button>
                <button id="riceBowlBtn" onclick="showRiceBowl()" class="w-1/2 z-10 text-gray-500 font-inter font-bold transition-colors duration-300">RiceBowl</button>
            </div>
    
            <!-- Item Menu -->
            <div id="mainCourse" class="absolute top-[175px] left-[626px] transform -translate-x-1/2 flex w-[50%] flex-wrap items-start gap-5 mt-2">

                <!-- Item 1 -->
                <div class="relative w-[180px] h-auto">
                    {{-- Gambar Menu --}}
                    <img src="img/order/ordermenu1.png" alt="ayam-geprek" class="w-auto h-[250px] object-cover z-0">
                    {{-- Teks Add --}}
                    <div class="absolute top-[85%] mt-[6px] ml-[86px] transform -translate-x-1/2 text-center">
                        <span class="quantity text-black font-inter font-bold text-[13px]" style="opacity: 0.25;">
                            Add
                        </span>
                    </div>
                    {{-- Tombol Plus dan Minus --}}
                    <div class="absolute top-[90%] mt-[6px] ml-[86px] transform -translate-x-1/2 -translate-y-1/2 flex justify-between items-center w-[100px] h-[21px] bg-[#FFFADD] bg-opacity-40 rounded-[20px] z-10">
                        <img src="img/order/minus.png" alt="minus-button" class="minus-button w-[17px] h-[17px] ml-2 cursor-pointer">
                        <img src="img/order/plus.png" alt="plus-button" class="plus-button w-[17px] h-[17px] mr-2 cursor-pointer">
                    </div>
                    {{-- SVG untuk teks melengkung --}}
                    <svg class="absolute top-[-60px] left-0 w-full h-full z-50 pointer-events-none" viewBox="0 0 264 264">
                        <path id="menu1-path" d="M132,132 m-100,0 a100,100 0 1,1 200,0 a100,100 0 1,1 -200,0" fill="none" />
                        <text class="font-inter font-bold font-size-[12px]" fill="#002E48" letter-spacing="3px">
                            <textPath href="#menu1-path" text-anchor="middle" startOffset="25%">
                                AYAM GEPREK
                            </textPath>
                        </text>
                    </svg>
                    {{-- Teks Deskripsi --}}
                    <div class="absolute top-[80%] left-0 w-full text-center transform -translate-y-[50%] p-5">
                        <span class="text-black font-[Poppins] text-[8px] block">
                            Ayam Geprek - Lalapan - Pisang
                        </span>
                        <div class="flex justify items-center mt-[3px] ml-[5px]">
                            <span class="text-black font-semibold font-[Poppins] text-[13px]" style="opacity: 0.82; text-shadow: 0px 4px 8px rgba(0, 0, 0, 0.25);">
                                RP. 20.000
                            </span>
                            <img src="img/order/like.png" alt="like-button" class="w-[22px] h-[22px] ml-8" style="opacity: 0.82; text-shadow: 0px 4px 8px rgba(0, 0, 0, 0.25);">
                        </div>
                    </div>
                </div>
                

                <!-- Item 2 -->
                <div class="relative w-[180px] h-auto">
                    {{-- Gambar Menu --}}
                    <img src="img/order/ordermenu2.png" alt="ayam-katsu" class="w-auto h-[250px] object-cover z-0">
                    {{-- Teks Add --}}
                    <div class="absolute top-[85%] mt-[6px] ml-[86px] transform -translate-x-1/2 text-center">
                        <span class="quantity text-black font-inter font-bold text-[13px]" style="opacity: 0.25;">
                            Add
                        </span>
                    </div>
                    {{-- Tombol Plus dan Minus --}}
                    <div class="absolute top-[90%] mt-[6px] ml-[86px] transform -translate-x-1/2 -translate-y-1/2 flex justify-between items-center w-[100px] h-[21px] bg-[#FFFADD] bg-opacity-40 rounded-[20px] z-10">
                        <img src="img/order/minus.png" alt="minus-button" class="minus-button w-[17px] h-[17px] ml-2">
                        <img src="img/order/plus.png" alt="plus-button" class="plus-button w-[17px] h-[17px] mr-2">
                    </div>
                    {{-- SVG untuk teks melengkung --}}
                    <svg class="absolute top-[-60px] left-0 w-full h-full z-50 pointer-events-none" viewBox="0 0 264 264">
                        <path id="menu2-path" d="M132,132 m-100,0 a100,100 0 1,1 200,0 a100,100 0 1,1 -200,0" fill="none" />
                        <text class="font-inter font-bold font-size-[12px]" fill="#002E48" letter-spacing="3px">
                            <textPath href="#menu2-path" text-anchor="middle" startOffset="25%">
                                AYAM KATSU
                            </textPath>
                        </text>
                    </svg>
                    {{-- Teks Deskripsi --}}
                    <div class="absolute top-[80%] left-0 w-full text-center transform -translate-y-[50%] p-2">
                        <span class="text-black font-[Poppins] text-[8px] block">
                            Ayam Katsu - Sayur Capcay - Pudding
                        </span>
                        <div class="flex justify items-center mt-[3px] ml-[5px] ">
                            <span class="text-black font-semibold font-[Poppins] text-[13px]" style="opacity: 0.82; text-shadow: 0px 4px 8px rgba(0, 0, 0, 0.25);">
                                RP. 20.000
                            </span>
                            <img src="img/order/like.png" alt="like-button" class="w-[22px] h-[22px] ml-10" style="opacity: 0.82; text-shadow: 0px 4px 8px rgba(0, 0, 0, 0.25);">
                        </div>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="relative w-[180px] h-auto">
                    {{-- Gambar Menu --}}
                    <img src="img/order/ordermenu3.png" alt="ayam-saostiram" class="w-auto h-[250px] object-cover z-0">
                    {{-- Teks Add --}}
                    <div class="absolute top-[85%] mt-[6px] ml-[86px] transform -translate-x-1/2 text-center">
                        <span class="quantity text-black font-inter font-bold text-[13px]" style="opacity: 0.25;">
                            Add
                        </span>
                    </div>
                    {{-- Tombol Plus dan Minus --}}
                    <div class="absolute top-[90%] mt-[6px] ml-[86px] transform -translate-x-1/2 -translate-y-1/2 flex justify-between items-center w-[100px] h-[21px] bg-[#FFFADD] bg-opacity-40 rounded-[20px] z-10">
                        <img src="img/order/minus.png" alt="minus-button" class="minus-button w-[17px] h-[17px] ml-2">
                        <img src="img/order/plus.png" alt="plus-button" class="plus-button w-[17px] h-[17px] mr-2">
                    </div>
                    {{-- SVG untuk teks melengkung --}}
                    <svg class="absolute top-[-58px] left-0 w-full h-full z-50 pointer-events-none" viewBox="0 0 264 264">
                        <path id="menu3-path" d="M132,132 m-100,0 a100,100 0 1,1 200,0 a100,100 0 1,1 -200,0" fill="none" />
                        <text class="font-inter font-bold font-size-[12px]" fill="#002E48" letter-spacing="3px">
                            <textPath href="#menu3-path" text-anchor="middle" startOffset="25%">
                                AYAM SAOS TIRAM
                            </textPath>
                        </text>
                    </svg>
                    {{-- Teks Deskripsi --}}
                    <div class="absolute top-[80%] left-0 w-full text-center transform -translate-y-[50%] p-2">
                        <span class="text-black font-[Poppins] text-[8px] block">
                            Ayam Saos Tiram - Kol Tumis - Pudding
                        </span>
                        <div class="flex justify items-center mt-[3px] ml-[5px]">
                            <span class="text-black font-semibold font-[Poppins] text-[13px]" style="opacity: 0.82; text-shadow: 0px 4px 8px rgba(0, 0, 0, 0.25);">
                                RP. 20.000
                            </span>
                            <img src="img/order/like.png" alt="like-button" class="w-[22px] h-[22px] ml-10" style="opacity: 0.82; text-shadow: 0px 4px 8px rgba(0, 0, 0, 0.25);">
                        </div>
                    </div>
                </div>
                <!-- Item 4 -->
                 <div class="relative w-[180px] h-auto">
                    {{-- Gambar Menu --}}
                    <img src="img/order/ordermenu4.png" alt="lele-goreng" class="w-auto h-[250px] object-cover z-0">
                    {{-- Teks Add --}}
                    <div class="absolute top-[85%] mt-[6px] ml-[86px] transform -translate-x-1/2 text-center">
                        <span class="quantity text-black font-inter font-bold text-[13px]" style="opacity: 0.25;">
                            Add
                        </span>
                    </div>
                    {{-- Tombol Plus dan Minus --}}
                    <div class="absolute top-[90%] mt-[6px] ml-[86px] transform -translate-x-1/2 -translate-y-1/2 flex justify-between items-center w-[100px] h-[21px] bg-[#FFFADD] bg-opacity-40 rounded-[20px] z-10">
                        <img src="img/order/minus.png" alt="minus-button" class="minus-button w-[17px] h-[17px] ml-2">
                        <img src="img/order/plus.png" alt="plus-button" class="plus-button w-[17px] h-[17px] mr-2">
                    </div>
                    {{-- SVG untuk teks melengkung --}}
                    <svg class="absolute top-[-60px] left-0 w-full h-full z-50 pointer-events-none" viewBox="0 0 264 264">
                        <path id="menu4-path" d="M132,132 m-100,0 a100,100 0 1,1 200,0 a100,100 0 1,1 -200,0" fill="none" />
                        <text class="font-inter font-bold font-size-[12px]" fill="#002E48" letter-spacing="3px">
                            <textPath href="#menu4-path" text-anchor="middle" startOffset="25%">
                                LELE GORENG
                            </textPath>
                        </text>
                    </svg>
                    {{-- Teks Deskripsi --}}
                    <div class="absolute top-[80%] left-0 w-full text-center transform -translate-y-[50%] p-5">
                        <span class="text-black font-[Poppins] text-[8px] block">
                            Lele Goreng - Mie Goreng - Pisang
                        </span>
                        <div class="flex justify items-center mt-[3px] ml-[4px]">
                            <span class="text-black font-semibold font-[Poppins] text-[13px]" style="opacity: 0.82; text-shadow: 0px 4px 8px rgba(0, 0, 0, 0.25);">
                                RP. 20.000
                            </span>
                            <img src="img/order/like.png" alt="like-button" class="w-[22px] h-[22px] ml-10" style="opacity: 0.82; text-shadow: 0px 4px 8px rgba(0, 0, 0, 0.25);">
                        </div>
                    </div>
                </div>
                <!-- Item 5 -->
                 <div class="relative w-[180px] h-auto">
                    {{-- Gambar Menu --}}
                    <img id="quantity" src="img/order/ordermenu5.png" alt="telur-dadar" class="w-auto h-[250px] object-cover z-0">
                    {{-- Teks Add --}}
                    <div class="absolute top-[85%] mt-[6px] ml-[86px] transform -translate-x-1/2 text-center">
                        <span class="quantity text-black font-inter font-bold text-[13px]" style="opacity: 0.25;">
                            Add
                        </span>
                    </div>
                    {{-- Tombol Plus dan Minus --}}
                    <div class="absolute top-[90%] mt-[6px] ml-[86px] transform -translate-x-1/2 -translate-y-1/2 flex justify-between items-center w-[100px] h-[21px] bg-[#FFFADD] bg-opacity-40 rounded-[20px] z-10">
                        <img src="img/order/minus.png" alt="minus-button" class="minus-button w-[17px] h-[17px] ml-2">
                        <img src="img/order/plus.png" alt="plus-button" class="plus-button w-[17px] h-[17px] mr-2">
                    </div>
                    {{-- SVG untuk teks melengkung --}}
                    <svg class="absolute top-[-58px] left-0 w-full h-full z-50 pointer-events-none" viewBox="0 0 264 264">
                        <path id="menu5-path" d="M132,132 m-100,0 a100,100 0 1,1 200,0 a100,100 0 1,1 -200,0" fill="none" />
                        <text class="font-inter font-bold font-size-[12px]" fill="#002E48" letter-spacing="3px">
                            <textPath href="#menu5-path" text-anchor="middle" startOffset="25%">
                                TELUR DADAR
                            </textPath>
                        </text>
                    </svg>
                    {{-- Teks Deskripsi --}}
                    <div class="absolute top-[80%] left-0 w-full text-center transform -translate-y-[50%] p-5">
                        <span class="text-black font-[Poppins] text-[8px] block">
                            Telur Dadar - Kangkung - Pisang
                        </span>
                        <div class="flex justify items-center mt-[3px] ml-[5px]">
                            <span class="text-black font-semibold font-[Poppins] text-[13px]" style="opacity: 0.82; text-shadow: 0px 4px 8px rgba(0, 0, 0, 0.25);">
                                RP. 20.000
                            </span>
                            <img src="img/order/like.png" alt="like-button" class="w-[22px] h-[22px] ml-10" style="opacity: 0.82; text-shadow: 0px 4px 8px rgba(0, 0, 0, 0.25);">
                        </div>
                    </div>
                </div>
                <!-- Item 6 -->
                 <div class="relative w-[180px] h-auto">
                    {{-- Gambar Menu --}}
                    <img id="quantity" src="img/order/ordermenu6.png" alt="chicken-curry" class="w-auto h-[250px] object-cover z-0">
                    {{-- Teks Add --}}
                    <div class="absolute top-[85%] mt-[6px] ml-[86px] transform -translate-x-1/2 text-center">
                        <span class="quantity text-black font-inter font-bold text-[13px]" style="opacity: 0.25;">
                            Add
                        </span>
                    </div>
                    {{-- Tombol Plus dan Minus --}}
                    <div class="absolute top-[90%] mt-[6px] ml-[86px] transform -translate-x-1/2 -translate-y-1/2 flex justify-between items-center w-[100px] h-[21px] bg-[#FFFADD] bg-opacity-40 rounded-[20px] z-10">
                        <img src="img/order/minus.png" alt="minus-button" class="minus-button w-[17px] h-[17px] ml-2">
                        <img src="img/order/plus.png" alt="plus-button" class="plus-button w-[17px] h-[17px] mr-2">
                    </div>
                    {{-- SVG untuk teks melengkung --}}
                    <svg class="absolute top-[-55px] left-0 w-full h-full z-50 pointer-events-none" viewBox="0 0 264 264">
                        <path id="menu6-path" d="M132,132 m-100,0 a100,100 0 1,1 200,0 a100,100 0 1,1 -200,0" fill="none" />
                        <text class="font-inter font-bold font-size-[12px]" fill="#002E48" letter-spacing="3px">
                            <textPath href="#menu6-path" text-anchor="middle" startOffset="25%">
                                TELUR PUYUH
                            </textPath>
                        </text>
                    </svg>
                    {{-- Teks Deskripsi --}}
                    <div class="absolute top-[80%] left-0 w-full text-center transform -translate-y-[50%] p-2">
                        <span class="text-black font-[Poppins] text-[8px] block">
                            Telur Puyuh - Kangkung - Dumpling
                        </span>
                        <div class="flex justify items-center mt-[3px] ml-[12px]">
                            <span class="text-black font-semibold font-[Poppins] text-[13px]" style="opacity: 0.82; text-shadow: 0px 4px 8px rgba(0, 0, 0, 0.25);">
                                RP. 20.000
                            </span>
                            <img src="img/order/like.png" alt="like-button" class="w-[22px] h-[22px] ml-10" style="opacity: 0.82; text-shadow: 0px 4px 8px rgba(0, 0, 0, 0.25);">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Item Ricebowl -->
            <div id="riceBowl" class="absolute top-[175px] left-[626px] transform -translate-x-1/2 flex w-[50%] flex-wrap items-start gap-5 mt-2 hidden">
                <!-- Item 1 -->
                <div class="relative w-[180px] h-auto">
                    {{-- Gambar Menu --}}
                    <img src="img/order/bowl1.png" alt="ayam-mentega" class="w-auto h-[250px] object-cover z-0">
                    {{-- Teks Add --}}
                    <div class="absolute top-[85%] mt-[6px] ml-[86px] transform -translate-x-1/2 text-center">
                        <span  class="quantity text-black font-inter font-bold text-[13px]" style="opacity: 0.25;">
                            Add
                        </span>
                    </div>
                    {{-- Tombol Plus dan Minus --}}
                    <div class="absolute top-[90%] mt-[6px] ml-[86px] transform -translate-x-1/2 -translate-y-1/2 flex justify-between items-center w-[100px] h-[21px] bg-[#FFFADD] bg-opacity-40 rounded-[20px] z-10">
                        <img src="img/order/minus.png" alt="minus-button" class="minus-button w-[17px] h-[17px] ml-2">
                        <img src="img/order/plus.png" alt="plus-button" class="plus-button w-[17px] h-[17px] mr-2">
                    </div>
                    {{-- SVG untuk teks melengkung --}}
                    <svg class="absolute top-[-55px] left-0 w-full h-full z-50 pointer-events-none" viewBox="0 0 264 264">
                        <path id="bowl1-path" d="M132,132 m-100,0 a100,100 0 1,1 200,0 a100,100 0 1,1 -200,0" fill="none" />
                        <text class="font-inter font-bold font-size-[12px]" fill="#002E48" letter-spacing="3px">
                            <textPath href="#bowl1-path" text-anchor="middle" startOffset="25%">
                                AYAM MENTEGA
                            </textPath>
                        </text>
                    </svg>
                    {{-- Teks Deskripsi --}}
                    <div class="absolute top-[80%] left-0 w-full text-center transform -translate-y-[50%] p-5">
                        <span class="text-black font-[Poppins] text-[8px] block">
                            Ayam Saos + Telur Dadar Rawis
                        </span>
                        <div class="flex justify items-center mt-[3px] ml-[5px]">
                            <span class="text-black font-semibold font-[Poppins] text-[13px]" style="opacity: 0.82; text-shadow: 0px 4px 8px rgba(0, 0, 0, 0.25);">
                                RP. 15.000
                            </span>
                            <img src="img/order/like.png" alt="like-button" class="w-[22px] h-[22px] ml-8" style="opacity: 0.82; text-shadow: 0px 4px 8px rgba(0, 0, 0, 0.25);">
                        </div>
                    </div>
                </div>
                
                <!-- Item 2 -->
                <div class="relative w-[180px] h-auto">
                    {{-- Gambar Menu --}}
                    <img src="img/order/bowl2.png" alt="ayam-katsu" class="w-auto h-[250px] object-cover z-0">
                    {{-- Teks Add --}}
                    <div class="absolute top-[85%] mt-[6px] ml-[86px] transform -translate-x-1/2 text-center">
                        <span class="quantity text-black font-inter font-bold text-[13px]" style="opacity: 0.25;">
                            Add
                        </span>
                    </div>
                    {{-- Tombol Plus dan Minus --}}
                    <div class="absolute top-[90%] mt-[6px] ml-[86px] transform -translate-x-1/2 -translate-y-1/2 flex justify-between items-center w-[100px] h-[21px] bg-[#FFFADD] bg-opacity-40 rounded-[20px] z-10">
                        <img src="img/order/minus.png" alt="minus-button" class="minus-button w-[17px] h-[17px] ml-2">
                        <img src="img/order/plus.png" alt="plus-button" class="plus-button w-[17px] h-[17px] mr-2">
                    </div>
                    {{-- SVG untuk teks melengkung --}}
                    <svg class="absolute top-[-54px] left-0 w-full h-full z-50 pointer-events-none" viewBox="0 0 264 264">
                        <path id="bowl2-path" d="M132,132 m-100,0 a100,100 0 1,1 200,0 a100,100 0 1,1 -200,0" fill="none" />
                        <text class="font-inter font-bold font-size-[12px]" fill="#002E48" letter-spacing="3px">
                            <textPath href="#bowl2-path" text-anchor="middle" startOffset="25%">
                                AYAM KATSU
                            </textPath>
                        </text>
                    </svg>
                    {{-- Teks Deskripsi --}}
                    <div class="absolute top-[80%] left-0 w-full text-center transform -translate-y-[50%] p-5">
                        <span class="text-black font-[Poppins] text-[8px] block">
                            Ayam Katsu
                        </span>
                        <div class="flex justify items-center mt-[3px] ml-[5px]">
                            <span class="text-black font-semibold font-[Poppins] text-[13px]" style="opacity: 0.82; text-shadow: 0px 4px 8px rgba(0, 0, 0, 0.25);">
                                RP. 15.000
                            </span>
                            <img src="img/order/like.png" alt="like-button" class="w-[22px] h-[22px] ml-10" style="opacity: 0.82; text-shadow: 0px 4px 8px rgba(0, 0, 0, 0.25);">
                        </div>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="relative w-[180px] h-auto">
                    {{-- Gambar Menu --}}
                    <img src="img/order/bowl3.png" alt="ayam-saostiram" class="w-auto h-[250px] object-cover z-0">
                    {{-- Teks Add --}}
                    <div class="absolute top-[85%] mt-[6px] ml-[86px] transform -translate-x-1/2 text-center">
                        <span class="quantity text-black font-inter font-bold text-[13px]" style="opacity: 0.25;">
                            Add
                        </span>
                    </div>
                    {{-- Tombol Plus dan Minus --}}
                    <div class="absolute top-[90%] mt-[6px] ml-[86px] transform -translate-x-1/2 -translate-y-1/2 flex justify-between items-center w-[100px] h-[21px] bg-[#FFFADD] bg-opacity-40 rounded-[20px] z-10">
                        <img src="img/order/minus.png" alt="minus-button" class="minus-button w-[17px] h-[17px] ml-2">
                        <img src="img/order/plus.png" alt="plus-button" class="plus-button w-[17px] h-[17px] mr-2">
                    </div>
                    {{-- SVG untuk teks melengkung --}}
                    <svg class="absolute top-[-56px] left-0 w-full h-full z-50 pointer-events-none" viewBox="0 0 264 264">
                        <path id="menu3-path" d="M132,132 m-100,0 a100,100 0 1,1 200,0 a100,100 0 1,1 -200,0" fill="none" />
                        <text class="font-inter font-bold font-size-[12px]" fill="#002E48" letter-spacing="3px">
                            <textPath href="#menu3-path" text-anchor="middle" startOffset="26%">
                                AYAM ASAM MANIS
                            </textPath>
                        </text>
                    </svg>
                    {{-- Teks Deskripsi --}}
                    <div class="absolute top-[80%] left-0 w-full text-center transform -translate-y-[50%] p-5">
                        <span class="text-black font-[Poppins] text-[8px] block">
                            Ayam Asam Manis
                        </span>
                        <div class="flex justify items-center mt-[3px] ml-[5px]">
                            <span class="text-black font-semibold font-[Poppins] text-[13px]" style="opacity: 0.82; text-shadow: 0px 4px 8px rgba(0, 0, 0, 0.25);">
                                RP. 15.000
                            </span>
                            <img src="img/order/like.png" alt="like-button" class="w-[22px] h-[22px] ml-10" style="opacity: 0.82; text-shadow: 0px 4px 8px rgba(0, 0, 0, 0.25);">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Background Putih di Paling Kanan -->
        <div class="w-[439px] h-full bg-white shadow-lg flex flex-col items-center justify-start">
            <!-- Judul -->
            <h3 class="text-black font-bold text-[16px] mb-4">Your Order</h3>

            <!-- Daftar Pesanan -->
            <div id="orderList" class="order-summary w-full px-5 flex flex-col gap-3 overflow-y-auto h-[70%]">
                <!-- Menu yang ditambahkan akan muncul di sini -->
            </div>

            <!-- Tombol GO TO ORDER -->
            <div class="w-full flex flex-col items-center mt-auto relative">
                <!-- Gambar Button Order -->
                <img src="img/order/buttonorder.png" alt="order-icon" class="w-[194px] h-[49px] mb-5 relative z-0">

                <!-- Teks dan Ikon Cart -->
                <div class="absolute bottom-[28px] w-full flex items-center justify-between px-5 z-10">
                    <img src="img/order/cart.png" alt="cart-icon" class="w-[30px] h-[30px] ml-[113px]">
                    <span class="font-bold font-inter text-[14px] text-center mr-[123px] text-white mx-auto block">
                        GO TO ORDER
                    </span>
                </div>
            </div>
        </div>
    </div>
    <script>
        const slider = document.getElementById("slider");
        const mainBtn = document.getElementById("mainCourseBtn");
        const riceBtn = document.getElementById("riceBowlBtn");
    
        mainBtn.addEventListener("click", () => {
            slider.style.left = "0.25rem"; // 4px
            mainBtn.classList.add("text-black");
            mainBtn.classList.remove("text-gray-500");
            riceBtn.classList.add("text-gray-500");
            riceBtn.classList.remove("text-black");
    
            // Tampilkan Main Course, Sembunyikan RiceBowl
            document.getElementById('mainCourse').classList.remove('hidden');
            document.getElementById('riceBowl').classList.add('hidden');
        });
    
        riceBtn.addEventListener("click", () => {
            slider.style.left = "calc(50% + 0.25rem)";
            riceBtn.classList.add("text-black");
            riceBtn.classList.remove("text-gray-500");
            mainBtn.classList.add("text-gray-500");
            mainBtn.classList.remove("text-black");
    
            // Tampilkan RiceBowl, Sembunyikan Main Course
            document.getElementById('mainCourse').classList.add('hidden');
            document.getElementById('riceBowl').classList.remove('hidden');
        });
    
        // Ambil semua tombol plus dan minus
        const plusButtons = document.querySelectorAll('.plus-button');
        const minusButtons = document.querySelectorAll('.minus-button');
        const orderList = document.getElementById('orderList'); // Container untuk daftar menu

        // Tambahkan event listener untuk tombol plus
        plusButtons.forEach((plusButton) => {
            plusButton.addEventListener('click', () => {
                // Cari elemen quantity dan deskripsi menu terdekat
                const menuContainer = plusButton.closest('.relative');
                const quantityText = menuContainer.querySelector('.quantity');
                const menuDescription = menuContainer.querySelector('.text-black').textContent.trim();

                let quantity = parseInt(quantityText.textContent) || 0; // Ambil nilai saat ini atau 0
                quantity++; // Tambah jumlah
                quantityText.textContent = quantity; // Perbarui teks
                quantityText.style.opacity = 1; // Ubah opacity agar terlihat jelas

                // Tambahkan atau perbarui menu di daftar pesanan
                let existingMenu = document.querySelector(`[data-menu="${menuDescription}"]`);
                if (existingMenu) {
                    // Jika menu sudah ada, perbarui jumlahnya
                    const existingQuantity = existingMenu.querySelector('.order-quantity');
                    existingQuantity.textContent = `x${quantity}`;
                } else {
                    // Jika menu belum ada, tambahkan menu baru
                    const newMenu = document.createElement('div');
                    newMenu.classList.add('flex', 'justify-between', 'items-center', 'border-b', 'pb-2');
                    newMenu.setAttribute('data-menu', menuDescription);
                    newMenu.innerHTML = `
                        <span class="text-black font-medium">${menuDescription}</span>
                        <span class="order-quantity text-black font-bold">x${quantity}</span>
                    `;
                    orderList.appendChild(newMenu);
                }
            });
        });

        // Tambahkan event listener untuk tombol minus
        minusButtons.forEach((minusButton) => {
            minusButton.addEventListener('click', () => {
                // Cari elemen quantity dan deskripsi menu terdekat
                const menuContainer = minusButton.closest('.relative');
                const quantityText = menuContainer.querySelector('.quantity');
                const menuDescription = menuContainer.querySelector('.text-black').textContent.trim();

                let quantity = parseInt(quantityText.textContent) || 0; // Ambil nilai saat ini atau 0
                if (quantity > 0) {
                    quantity--; // Kurangi jumlah jika lebih dari 0
                    quantityText.textContent = quantity; // Perbarui teks
                }
                if (quantity === 0) {
                    quantityText.textContent = 'Add'; // Kembali ke teks "Add" jika jumlah 0
                    quantityText.style.opacity = 0.25; // Ubah opacity kembali
                }

                // Hapus atau perbarui menu di daftar pesanan
                let existingMenu = document.querySelector(`[data-menu="${menuDescription}"]`);
                if (existingMenu) {
                    if (quantity === 0) {
                        // Jika jumlah 0, hapus menu dari daftar
                        existingMenu.remove();
                    } else {
                        // Jika jumlah lebih dari 0, perbarui jumlahnya
                        const existingQuantity = existingMenu.querySelector('.order-quantity');
                        existingQuantity.textContent = `x${quantity}`;
                    }
                }
            });
        });
    </script>
</body>
</html>
