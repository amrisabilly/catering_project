<!-- filepath: c:\laragon\www\learn10\resources\views\order.blade.php -->
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
        <!-- Kiri: Menu -->
        <div class="flex-1">
            <!-- Back button & title -->
            <div class="absolute top-[59px] left-[60px] flex items-center">
                <a href="/">
                    <img src="img/order/backbutton.png" alt="back-button" class="w-auto h-auto">
                </a>
                <span class="ml-4 text-black font-inter font-bold text-[20px]"
                    style="opacity: 0.82; text-shadow: 0px 4px 8px rgba(0, 0, 0, 0.25);">ORDER MENU</span>
            </div>

            <!-- Toggle Segment -->
            <div
                class="absolute top-[100px] left-[35%] transform -translate-x-1/2 w-[300px] h-[48px] bg-[#F0EEE3] rounded-full flex items-center px-1 shadow-md">
                <div id="slider"
                    class="absolute top-1 left-1 w-[calc(50%-8px)] h-[40px] bg-white rounded-full shadow transition-all duration-300">
                </div>
                <button id="mainCourseBtn"
                    class="w-1/2 z-10 text-black font-inter font-bold transition-colors duration-300"
                    onclick="showMainCourse()">Main Course</button>
                <button id="riceBowlBtn"
                    class="w-1/2 z-10 text-gray-500 font-inter font-bold transition-colors duration-300"
                    onclick="showRiceBowl()">RiceBowl</button>
            </div>

            <!-- Main Course Menu -->
            <div id="mainCourse"
                class="absolute top-[175px] left-[626px] transform -translate-x-1/2 flex w-[50%] flex-wrap items-start gap-5 mt-2">
                {{-- ...ISI ITEM MAIN COURSE seperti yang sudah ada, pastikan ada atribut data-name, data-price, data-img... --}}
                <!-- Item 1 -->
                <div class="relative w-[200px] h-[296px] flex justify-center items-center border-2 border-[#FBA304] rounded-xl hover:shadow-[0_0_10px_2px_#FBA304]"
                    data-name="Ayam Geprek" data-price="20000" data-img="img/order/ordermenu1.png">
                    {{-- Gambar Menu --}}
                    <img src="img/order/ordermenu1.png" alt="ayam-geprek"
                        class="w-auto h-[250px] object-cover z-0 mt-5">
                    {{-- Teks Add --}}
                    <div class="absolute top-[82%] mt-[6px] text-center">
                        <span class="quantity text-black font-inter font-bold text-[13px]" style="opacity: 0.25;">
                            Add
                        </span>
                    </div>
                    {{-- Tombol Plus dan Minus --}}
                    <div
                        class="absolute top-[83%] mt-[6px] flex justify-between items-center w-[100px] h-[21px] bg-[#FFFADD] bg-opacity-40 rounded-[20px] z-10">
                        <img src="img/order/minus.png" alt="minus-button"
                            class="minus-button w-[17px] h-[17px] ml-2 cursor-pointer">
                        <img src="img/order/plus.png" alt="plus-button"
                            class="plus-button w-[17px] h-[17px] mr-2 cursor-pointer">
                    </div>
                    {{-- SVG untuk teks melengkung --}}
                    <svg class="absolute top-[-50px] left-0 w-full h-[20em] z-50 pointer-events-none"
                        viewBox="0 0 264 264">
                        <path id="menu1-path" d="M132,132 m-100,0 a100,100 0 1,1 200,0 a100,100 0 1,1 -200,0"
                            fill="none" />
                        <text class="font-inter font-bold font-size-[12px] relative" fill="#002E48"
                            letter-spacing="3px">
                            <textPath href="#menu1-path" text-anchor="middle" startOffset="25%">
                                AYAM ayam
                            </textPath>
                        </text>
                    </svg>
                    {{-- Teks Deskripsi --}}
                    <div class="absolute top-[78%] left-0 w-full text-center transform -translate-y-[50%]">
                        <span class="text-black font-[Poppins] text-[8px] block">
                            Ayam Geprek - Lalapan - Pisang
                        </span>
                        <div class="flex justify-center items-center mt-[3px] ml-[5px]">
                            <span class="text-black font-semibold font-[Poppins] text-[13px]"
                                style="opacity: 0.82; text-shadow: 0px 4px 8px rgba(0, 0, 0, 0.25);">
                                RP. 20.000
                            </span>
                            <img src="img/order/like.png" alt="like-button" class="w-[22px] h-[22px] ml-8"
                                style="opacity: 0.82; text-shadow: 0px 4px 8px rgba(0, 0, 0, 0.25);">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Ricebowl Menu -->
            <div id="riceBowl"
                class="absolute top-[175px] left-[626px] transform -translate-x-1/2 flex w-[50%] flex-wrap items-start gap-5 mt-2 hidden">
                <!-- Tambahkan item ricebowl lain sesuai kebutuhan -->
                <!-- Item 1 -->
                <div class="relative w-[200px] h-[296px] flex justify-center items-center border-2 border-[#FBA304] rounded-xl"
                    data-name="Ayam Geprek" data-price="20000" data-img="img/order/ordermenu1.png">
                    {{-- Gambar Menu --}}
                    <img src="img/order/ordermenu1.png" alt="ayam-geprek"
                        class="w-auto h-[250px] object-cover z-0 mt-5">
                    {{-- Teks Add --}}
                    <div class="absolute top-[82%] mt-[6px] text-center">
                        <span class="quantity text-black font-inter font-bold text-[13px]" style="opacity: 0.25;">
                            Add
                        </span>
                    </div>
                    {{-- Tombol Plus dan Minus --}}
                    <div
                        class="absolute top-[83%] mt-[6px] flex justify-between items-center w-[100px] h-[21px] bg-[#FFFADD] bg-opacity-40 rounded-[20px] z-10">
                        <img src="img/order/minus.png" alt="minus-button"
                            class="minus-button w-[17px] h-[17px] ml-2 cursor-pointer">
                        <img src="img/order/plus.png" alt="plus-button"
                            class="plus-button w-[17px] h-[17px] mr-2 cursor-pointer">
                    </div>
                    {{-- SVG untuk teks melengkung --}}
                    <svg class="absolute top-[-50px] left-0 w-full h-[20em] z-50 pointer-events-none"
                        viewBox="0 0 264 264">
                        <path id="menu1-path" d="M132,132 m-100,0 a100,100 0 1,1 200,0 a100,100 0 1,1 -200,0"
                            fill="none" />
                        <text class="font-inter font-bold font-size-[12px] relative" fill="#002E48"
                            letter-spacing="3px">
                            <textPath href="#menu1-path" text-anchor="middle" startOffset="25%">
                                AYAM GEPREK
                            </textPath>
                        </text>
                    </svg>
                    {{-- Teks Deskripsi --}}
                    <div class="absolute top-[78%] left-0 w-full text-center transform -translate-y-[50%]">
                        <span class="text-black font-[Poppins] text-[8px] block">
                            Ayam Geprek - Lalapan - Pisang
                        </span>
                        <div class="flex justify-center items-center mt-[3px] ml-[5px]">
                            <span class="text-black font-semibold font-[Poppins] text-[13px]"
                                style="opacity: 0.82; text-shadow: 0px 4px 8px rgba(0, 0, 0, 0.25);">
                                RP. 20.000
                            </span>
                            <img src="img/order/like.png" alt="like-button" class="w-[22px] h-[22px] ml-8"
                                style="opacity: 0.82; text-shadow: 0px 4px 8px rgba(0, 0, 0, 0.25);">
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <!-- Kanan: Your Order -->
        <div class="w-[439px] h-full bg-white shadow-lg flex flex-col items-center justify-start">
            <!-- Judul -->
            <h3 class="text-black font-bold text-[16px] mb-4">Your Order</h3>
            <!-- Daftar Pesanan -->
            <div id="orderList" class="order-summary w-full px-5 flex flex-col gap-3 overflow-y-auto h-[70%]"></div>
            <!-- Tombol GO TO ORDER -->
            <div class="w-full flex flex-col items-center mt-auto relative">
                <img src="img/order/buttonorder.png" alt="order-icon" class="w-[194px] h-[49px] mb-5 relative z-0">
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
        // Toggle kategori menu
        function showMainCourse() {
            document.getElementById('mainCourse').classList.remove('hidden');
            document.getElementById('riceBowl').classList.add('hidden');
            document.getElementById('mainCourseBtn').classList.remove('text-gray-500');
            document.getElementById('mainCourseBtn').classList.add('text-black');
            document.getElementById('riceBowlBtn').classList.remove('text-black');
            document.getElementById('riceBowlBtn').classList.add('text-gray-500');
        }

        function showRiceBowl() {
            document.getElementById('mainCourse').classList.add('hidden');
            document.getElementById('riceBowl').classList.remove('hidden');
            document.getElementById('mainCourseBtn').classList.remove('text-black');
            document.getElementById('mainCourseBtn').classList.add('text-gray-500');
            document.getElementById('riceBowlBtn').classList.remove('text-gray-500');
            document.getElementById('riceBowlBtn').classList.add('text-black');
        }

        // Shopping cart logic
        function formatRupiah(angka) {
            return 'RP. ' + angka.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        }

        let cart = {};
        const orderList = document.getElementById('orderList');

        function renderCart() {
            orderList.innerHTML = '';
            let total = 0;
            Object.values(cart).forEach(item => {
                const itemTotal = item.price * item.qty;
                total += itemTotal;
                const div = document.createElement('div');
                div.className = "flex items-center gap-3 border-b pb-2";
                div.innerHTML = `
                    <img src="${item.img}" alt="${item.name}" class="w-[40px] h-[40px] rounded object-cover border">
                    <div class="flex-1">
                        <div class="font-semibold text-black text-[13px]">${item.name}</div>
                        <div class="text-[11px] text-gray-500">${formatRupiah(item.price)} x ${item.qty} = <span class="font-bold text-black">${formatRupiah(itemTotal)}</span></div>
                    </div>
                    <div class="flex flex-col items-center">
                        <button class="cart-plus bg-[#22668D] text-white rounded-full w-5 h-5 flex items-center justify-center mb-1" data-name="${item.name}">+</button>
                        <button class="cart-minus bg-[#FFCC70] text-black rounded-full w-5 h-5 flex items-center justify-center" data-name="${item.name}">-</button>
                    </div>
                `;
                orderList.appendChild(div);
            });
            // Total harga
            let totalDiv = document.getElementById('cart-total');
            if (!totalDiv) {
                totalDiv = document.createElement('div');
                totalDiv.id = 'cart-total';
                totalDiv.className = 'w-full text-right font-bold text-[15px] pt-3 border-t mt-2';
                orderList.parentNode.appendChild(totalDiv);
            }
            totalDiv.innerHTML = `Total: <span class="text-[#22668D]">${formatRupiah(total)}</span>`;

            // Event plus/minus di cart
            orderList.querySelectorAll('.cart-plus').forEach(btn => {
                btn.onclick = () => {
                    const name = btn.getAttribute('data-name');
                    cart[name].qty++;
                    renderCart();
                };
            });
            orderList.querySelectorAll('.cart-minus').forEach(btn => {
                btn.onclick = () => {
                    const name = btn.getAttribute('data-name');
                    cart[name].qty--;
                    if (cart[name].qty <= 0) delete cart[name];
                    renderCart();
                };
            });
        }

        // Event listener untuk tombol plus/minus di semua kategori
        function setupMenuButtons() {
            document.querySelectorAll('.plus-button').forEach((plusButton) => {
                plusButton.onclick = () => {
                    const menuContainer = plusButton.closest('.relative');
                    const name = menuContainer.getAttribute('data-name');
                    const price = parseInt(menuContainer.getAttribute('data-price'));
                    const img = menuContainer.getAttribute('data-img');
                    if (!cart[name]) {
                        cart[name] = {
                            name,
                            price,
                            img,
                            qty: 1
                        };
                    } else {
                        cart[name].qty++;
                    }
                    renderCart();
                };
            });
            document.querySelectorAll('.minus-button').forEach((minusButton) => {
                minusButton.onclick = () => {
                    const menuContainer = minusButton.closest('.relative');
                    const name = menuContainer.getAttribute('data-name');
                    if (cart[name]) {
                        cart[name].qty--;
                        if (cart[name].qty <= 0) delete cart[name];
                        renderCart();
                    }
                };
            });
        }

        // Jalankan setup saat halaman siap
        document.addEventListener('DOMContentLoaded', () => {
            setupMenuButtons();
            renderCart();
        });

        // Jika menu berubah (toggle), setup ulang event listener
        document.getElementById('mainCourseBtn').onclick = function() {
            showMainCourse();
            setupMenuButtons();
        };
        document.getElementById('riceBowlBtn').onclick = function() {
            showRiceBowl();
            setupMenuButtons();
        };
    </script>
</body>

</html>
