<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumah Catering Tanjungpinang</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="bg-[#FFFADD] w-full h-screen overflow-x-hidden flex fixed top-0 left-0 z-0">
        <!-- Kiri: Menu -->
        <div class="flex-1">
            <!-- Back button & title -->
            <div class="absolute top-[36px] left-[60px] flex items-center">
                <a href="/">
                    <img src="img/order/backbutton.png" alt="back-button" class="w-auto h-auto">
                </a>
                <span class="ml-4 text-black font-inter font-bold text-[20px]"
                    style="opacity: 0.82; text-shadow: 0px 4px 8px rgba(0, 0, 0, 0.25);">ORDER MENU</span>
            </div>

            <!-- Toggle Segment -->
            <div
                class="absolute top-[80px] left-[35%] transform -translate-x-1/2 w-[300px] h-[48px] bg-[#F0EEE3] rounded-full flex items-center px-1 shadow-md">
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
                class="absolute top-[145px] left-[626px] transform -translate-x-1/2 flex w-[50%] flex-wrap items-start gap-5 mt-2">
                @foreach ($mainCourse as $menu)
                    <div class="relative w-[200px] h-[296px] flex justify-center items-center hover:border-2 hover:border-[#FBA304] rounded-xl hover:shadow-[0_0_10px_2px_#FBA304] transition-all duration-300"
                        data-name="{{ $menu->nama_menu }}" data-price="{{ $menu->harga }}"
                        data-img="{{ asset('storage/' . $menu->gambar) }}">
                        {{-- Gambar Menu --}}
                        <img src="{{ asset('storage/' . $menu->gambar) }}" alt="{{ Str::slug($menu->nama_menu) }}"
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
                            <img src="{{ asset('img/order/minus.png') }}" alt="minus-button"
                                class="minus-button w-[17px] h-[17px] ml-2 cursor-pointer">
                            <img src="{{ asset('img/order/plus.png') }}" alt="plus-button"
                                class="plus-button w-[17px] h-[17px] mr-2 cursor-pointer">
                        </div>
                        {{-- Teks Deskripsi --}}
                        <div class="absolute top-[78%] left-0 w-full text-center transform -translate-y-[50%]">
                            <span class="text-black font-[Poppins] text-[8px] block">
                                {{ $menu->keterangan ?? '-' }}
                            </span>
                            <div class="flex justify-center items-center mt-[3px] ml-[5px]">
                                <span class="text-black font-semibold font-[Poppins] text-[13px]"
                                    style="opacity: 0.82; text-shadow: 0px 4px 8px rgba(0, 0, 0, 0.25);">
                                    Rp. {{ number_format($menu->harga, 0, ',', '.') }}
                                </span>
                                <img src="{{ asset('img/order/like.png') }}" alt="like-button"
                                    class="w-[22px] h-[22px] ml-8"
                                    style="opacity: 0.82; text-shadow: 0px 4px 8px rgba(0, 0, 0, 0.25);">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Ricebowl Menu -->
            <div id="riceBowl"
                class="absolute top-[145px] left-[626px] transform -translate-x-1/2 flex w-[50%] flex-wrap items-start gap-5 mt-2 hidden">
                @foreach ($riceBowl as $menu)
                    <div class="relative w-[200px] h-[296px] flex justify-center items-center hover-border-2 border-[#FBA304] rounded-xl hover:shadow-[0_0_10px_2px_#FBA304] transition-all duration-300"
                        data-name="{{ $menu->nama_menu }}" data-price="{{ $menu->harga }}"
                        data-img="{{ asset('storage/' . $menu->gambar) }}">
                        {{-- Gambar Menu --}}
                        <img src="{{ asset('storage/' . $menu->gambar) }}" alt="{{ Str::slug($menu->nama_menu) }}"
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
                            <img src="{{ asset('img/order/minus.png') }}" alt="minus-button"
                                class="minus-button w-[17px] h-[17px] ml-2 cursor-pointer">
                            <img src="{{ asset('img/order/plus.png') }}" alt="plus-button"
                                class="plus-button w-[17px] h-[17px] mr-2 cursor-pointer">
                        </div>
                        {{-- SVG untuk teks melengkung --}}
                        <svg class="absolute top-[-50px] left-0 w-full h-[20em] z-50 pointer-events-none"
                            viewBox="0 0 264 264">
                            <path id="menu-path-{{ $menu->id }}"
                                d="M132,132 m-100,0 a100,100 0 1,1 200,0 a100,100 0 1,1 -200,0" fill="none" />
                            <text class="font-inter font-bold font-size-[12px] relative" fill="#002E48"
                                letter-spacing="3px">
                                <textPath href="#menu-path-{{ $menu->id }}" text-anchor="middle" startOffset="25%">
                                    {{ strtoupper($menu->nama_menu) }}
                                </textPath>
                            </text>
                        </svg>
                        {{-- Teks Deskripsi --}}
                        <div class="absolute top-[78%] left-0 w-full text-center transform -translate-y-[50%]">
                            <span class="text-black font-[Poppins] text-[8px] block">
                                {{ $menu->keterangan ?? '-' }}
                            </span>
                            <div class="flex justify-center items-center mt-[3px] ml-[5px]">
                                <span class="text-black font-semibold font-[Poppins] text-[13px]"
                                    style="opacity: 0.82; text-shadow: 0px 4px 8px rgba(0, 0, 0, 0.25);">
                                    RP. {{ number_format($menu->harga, 0, ',', '.') }}
                                </span>
                                <img src="{{ asset('img/order/like.png') }}" alt="like-button"
                                    class="w-[22px] h-[22px] ml-8"
                                    style="opacity: 0.82; text-shadow: 0px 4px 8px rgba(0, 0, 0, 0.25);">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

        <!-- ================= PANEL KANAN: ORDER & FORM ================= -->
        <div
            class="w-[439px] min-h-screen bg-white shadow-lg flex flex-col items-center justify-start sticky top-0 right-0 h-screen">
            <!-- Order Summary Section -->
            <div id="orderSummarySection" class="flex flex-col h-full w-full">
                <h3 class="text-black font-bold text-[20px] mb-4 mt-12 px-5 text-center">Your Order</h3>
                <!-- Scroll hanya di order list -->
                <div id="orderList" class="order-summary w-full px-5 flex flex-col gap-3 overflow-y-auto"
                    style="max-height: 520px;"></div>
                <!-- Spacer agar tombol tetap di bawah -->
                <div class="flex-1 mb-6"></div>
                <!-- Total Cart -->
                <div id="cart-total"
                    class="w-full flex justify-between items-center font-bold text-[15px] pt-3 border-t mt-2 mb-4 px-6">
                    <span>Total Price:</span>
                    <span id="cart-amount" class="text-[#22668D]">Rp.0</span>
                </div>
                <!-- Tombol GO TO ORDER selalu di bawah -->
                <div id="goToOrderBtn"
                    class="w-full flex flex-col items-center mb-8 relative cursor-pointer pointer-events-none opacity-50">
                    <img src="img/order/buttonorder.png" alt="order-icon" class="w-[194px] h-[49px] relative z-0">
                    <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center z-10 gap-x-10">
                        <img src="img/order/cart.png" alt="cart-icon" class="w-[30px] h-[30px] mr-0">
                        <span class="font-bold font-inter text-[14px] text-center text-white block mr-2">
                            GO TO ORDER
                        </span>
                    </div>
                </div>
            </div>
            <!-- Order Form Section (hidden by default) -->
            <div id="formSection" class="hidden w-full min-h-screen flex flex-col bg-white px-8 pt-6 shadow-lg">
                <!-- Back button & title -->
                <div class="flex items-center justify-between mt-4 mb-2 px-2 ">
                    <a href="javascript:void(0);" id="backToOrderBtn" class="flex items-center">
                        <img src="img/order/backbutton.png" alt="back-button" class="w-[30px] h-[30px]" />
                    </a>
                    <h3 class="font-bold font-poppins text-[16px] text-black text-center flex-1 absolute left-0 right-0 mx-auto"
                        style="pointer-events:none;">Deliver to</h3>
                    <div style="width:32px;"></div>
                </div>
                <div class="relative flex items-center justify-center my-2">
                    <!-- Line -->
                    <div class="absolute h-[1.6px] w-[260px] bg-[#000000] z-0"></div>
                    <!-- Circles -->
                    <div class="flex justify-between w-full px-10 z-10">
                        <div class="w-[20px] h-[20px] rounded-full bg-[#FBA304]"></div>
                        <div class="w-[20px] h-[20px] rounded-full bg-[#D9D9D9]"></div>
                        <div class="w-[20px] h-[20px] rounded-full bg-[#D9D9D9]"></div>
                    </div>
                </div>
                <h3 class="font-bold font-poppins text-[16px] text-black mt-5 mb-4 text-center">Customer Information
                </h3>
                <div class="flex flex-col gap-4 mb-4">
                    <input type="text" placeholder="Name"
                        class="border px-4 py-2 rounded-full outline-none shadow-sm" />
                    <div class="flex items-center border px-4 py-2 rounded-full shadow-sm">
                        <span class="text-gray-500 mr-2">(+62)</span>
                        <input type="text" placeholder="Phone Number" class="flex-1 outline-none" />
                    </div>
                    <textarea placeholder="Delivery Address" rows="3"
                        class="border px-4 py-2 rounded-lg outline-none shadow-sm resize-none"></textarea>
                    <input type="text" placeholder="Note.."
                        class="border px-4 py-2 rounded-full outline-none shadow-sm" />
                </div>
                <div class="mt-auto mb-8 w-full flex justify-center">
                    <button id="confirmOrderBtn"
                        class="bg-gradient-to-b from-[#0C4A6E] to-[#0A3D59] text-white font-bold px-8 py-2 rounded-full">
                        CONFIRM
                    </button>
                </div>
            </div>

            <!-- Order Details Section -->
            <div id="orderDetailsSection"
                class="hidden w-full min-h-screen flex flex-col bg-white px-8 pt-6 shadow-lg">
                <div class="flex items-center justify-between mt-4 mb-2 px-2">
                    <a href="javascript:void(0);" id="backToFormBtn" class="flex items-center">
                        <img src="img/order/backbutton.png" alt="back-button" class="w-[30px] h-[30px]" />
                    </a>
                    <h3 class="font-bold font-poppins text-[16px] text-black text-center flex-1 absolute left-0 right-0 mx-auto"
                        style="pointer-events:none;">Order Summary</h3>
                    <div style="width:32px;"></div>
                </div>
                <div class="relative flex items-center justify-center my-2">
                    <div class="absolute h-[1.6px] w-[260px] bg-[#000000] z-0"></div>
                    <div class="flex justify-between w-full px-10 z-10">
                        <div class="w-[20px] h-[20px] rounded-full bg-[#FBA304]"></div>
                        <div class="w-[20px] h-[20px] rounded-full bg-[#FBA304]"></div>
                        <div class="w-[20px] h-[20px] rounded-full bg-[#D9D9D9]"></div>
                    </div>
                </div>

                <div class="mt-6 mb-6 border-2 border-[#DDD9D9] rounded-[20px] p-4">
                    <h3 class="font-bold text-lg mb-4 text-center">Order Summary</h3>
                    <div id="orderDetailsList" class="space-y-3 overflow-y-auto max-h-[320px] pr-4">
                    </div>
                    <div class="border-t mt-4 pt-3">
                        <div class="flex justify-between font-bold">
                            <span>Sub Total</span>
                            <span id="orderSubTotal">Rp.0</span>
                        </div>
                    </div>
                </div>

                <div class="mt-auto mb-8 w-full flex justify-center">
                    <button
                        class="bg-gradient-to-b from-[#0C4A6E] to-[#0A3D59] text-white font-bold px-8 py-2 rounded-full ">
                        Proceed to Payment
                    </button>
                </div>
            </div>
            <!-- Payment Section -->
            <div id="paymentSection" class="hidden w-full min-h-screen flex flex-col bg-white px-8 pt-6 shadow-lg">
                <!-- Header dengan tombol back -->
                <div class="flex items-center justify-between mt-4 mb-2 px-2">
                    <a href="javascript:void(0);" id="backToOrderDetailsBtn" class="flex items-center">
                        <img src="img/order/backbutton.png" alt="back-button" class="w-[30px] h-[30px]" />
                    </a>
                    <h3 class="font-bold font-poppins text-[16px] text-black text-center flex-1 absolute left-0 right-0 mx-auto"
                        style="pointer-events:none;">Payment</h3>
                    <div style="width:32px;"></div>
                </div>
                <div class="relative flex items-center justify-center my-2">
                    <div class="absolute h-[1.6px] w-[260px] bg-[#000000] z-0"></div>
                    <div class="flex justify-between w-full px-10 z-10">
                        <div class="w-[20px] h-[20px] rounded-full bg-[#FBA304]"></div>
                        <div class="w-[20px] h-[20px] rounded-full bg-[#FBA304]"></div>
                        <div class="w-[20px] h-[20px] rounded-full bg-[#FBA304]"></div>
                    </div>
                </div>
                <!-- Pilihan metode pembayaran -->
                <div class="mt-6 mb-6 border-2 border-[#DDD9D9] rounded-[20px] p-4 shadow-md">
                    <h2 class="font-bold text-lg mb-4">Choice Your Payment Method</h2>

                    <div class="mb-4">
                        <div class="flex items-center mb-2">
                            <input type="radio" id="transferMethod" name="paymentMethod" value="transfer" checked
                                class="mr-2">
                            <label for="transferMethod" class="font-medium">Transfer</label>
                        </div>
                        <p class="ml-6 text-gray-600">BCA 8890684638 a.n Endah Setyowati</p>
                    </div>

                    <div class="mb-4">
                        <div class="flex items-center mb-2">
                            <input type="radio" id="codMethod" name="paymentMethod" value="cod"
                                class="mr-2">
                            <label for="codMethod" class="font-medium">Cash On Delivery</label>
                        </div>
                    </div>
                </div>

                <!-- Upload bukti transfer (hanya muncul ketika pilih transfer) -->
                <div class="mb-4" id="uploadProofWrapper">
                    <label class="font-bold mb-2 block">Upload Your Payment Proof <span
                            class="text-red-500">*</span></label>
                    <div class="border-2 border-dashed border-gray-300 rounded-lg p-4 text-center">
                        <p class="text-gray-500 mb-2 font-poppins font-medium">Drag and drop files here</p>
                        <p class="text-gray-500 text-sm mb-2 font-poppins font-medium">or</p>
                        <input type="file" id="paymentProof" class="hidden" accept="image/*" required>
                        <button type="button" onclick="document.getElementById('paymentProof').click()"
                            class="bg-gray-100 text-gray-700 px-4 py-2 rounded-full text-sm font-medium">
                            Upload a File
                        </button>
                    </div>
                    <p id="proofError" class="text-red-500 text-sm mt-1 hidden">Harap upload bukti transfer</p>
                </div>

                <!-- Tombol complete order -->
                <div class="mt-auto mb-8 w-full flex justify-center">
                    <button id="completeOrderBtn"
                        class="bg-gradient-to-b from-[#0C4A6E] to-[#0A3D59] text-white font-bold px-8 py-2 rounded-full">
                        COMPLETE ORDER
                    </button>
                </div>
            </div>
            <!-- Success Popup -->
            <div id="successPopup"
                class="fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center z-50 hidden">
                <div class="bg-white rounded-xl shadow-lg p-8 flex flex-col items-center">
                    <img src="img/order/success.png" alt="success" class="w-20 h-20 mb-4" />
                    <div class="font-bold text-lg mb-2 text-green-600">Berhasil!</div>
                    <div class="text-gray-700 mb-4">Pesanan Anda telah diterima.</div>
                    <button id="closeSuccessPopup"
                        class="bg-[#0C4A6E] text-white px-6 py-2 rounded-full font-bold">OK</button>
                </div>
            </div>
        </div>
    </div>
    </div>


    <script>
        // Toggle kategori menu
        function showMainCourse() {
            document.getElementById('mainCourse').classList.remove('hidden');
            document.getElementById('riceBowl').classList.add('hidden');

            // Ubah slider
            document.getElementById('slider').style.left = '1px';

            // Ubah warna teks
            document.getElementById('mainCourseBtn').classList.add('text-black');
            document.getElementById('mainCourseBtn').classList.remove('text-gray-500');
            document.getElementById('riceBowlBtn').classList.add('text-gray-500');
            document.getElementById('riceBowlBtn').classList.remove('text-black');
        }

        function showRiceBowl() {
            document.getElementById('mainCourse').classList.add('hidden');
            document.getElementById('riceBowl').classList.remove('hidden');

            // Ubah slider
            document.getElementById('slider').style.left = 'calc(50% + 1px)';

            // Ubah warna teks
            document.getElementById('riceBowlBtn').classList.add('text-black');
            document.getElementById('riceBowlBtn').classList.remove('text-gray-500');
            document.getElementById('mainCourseBtn').classList.add('text-gray-500');
            document.getElementById('mainCourseBtn').classList.remove('text-black');
        }

        // Inisialisasi saat tombol diklik
        document.getElementById('mainCourseBtn').onclick = function() {
            showMainCourse();
        };

        document.getElementById('riceBowlBtn').onclick = function() {
            showRiceBowl();
        };

        // --- CART LOGIC ---
        let cart = {};
        const orderList = document.getElementById('orderList');

        function formatRupiah(angka) {
            return 'RP. ' + angka.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        }

        function renderCart() {
            orderList.innerHTML = '';
            let total = 0;
            Object.values(cart).forEach(item => {
                const itemTotal = item.price * item.qty;
                total += itemTotal;
                const div = document.createElement('div');
                div.className = "flex items-center gap-3 border-b pb-2";
                div.innerHTML = `
                <div class="flex items-center justify-between bg-white rounded-[20px] shadow p-6 mb-3 w-full relative">
                    <img src="${item.img}" alt="${item.name}" class="w-[80px] h-[80px] rounded-full object-cover border border-gray-300">
                    <div class="flex-1 ml-3">
                        <div class="text-sm font-semibold text-gray-800">${item.name}</div>
                        <div class="mt-1 relative">
                            <div class="flex items-center justify-between w-[100px] h-[21px] bg-[#FFE9B5] bg-opacity-40 rounded-[20px] px-2 z-10">
                                <img src="img/order/minus.png" alt="minus-button" class="cart-minus w-[17px] h-[17px] cursor-pointer" data-name="${item.name}">
                                <span class="text-[13px] text-black font-bold">${item.qty}</span>
                                <img src="img/order/plus.png" alt="plus-button" class="cart-plus w-[17px] h-[17px] cursor-pointer" data-name="${item.name}">
                            </div>
                        </div>
                    </div>
                    <button class="remove-item absolute top-2 right-2 bg-[#FBA304] hover:bg-[#ff9800] text-white w-6 h-6 rounded-full text-base flex items-center justify-center font-bold leading-none p-0" data-name="${item.name}">
                        <span class="w-full h-full flex items-center justify-center mb-1">×</span>
                    </button>
                    <div class="ml-4 text-sm font-semibold text-gray-800 whitespace-nowrap self-end">
                        ${formatRupiah(itemTotal)}
                    </div>
                </div>
            `;
                orderList.appendChild(div);
            });
            document.getElementById('cart-amount').textContent = formatRupiah(total);

            // Aktifkan/tidak tombol GO TO ORDER
            const btn = document.getElementById('goToOrderBtn');
            if (Object.keys(cart).length > 0) {
                btn.classList.remove('pointer-events-none', 'opacity-50');
            } else {
                btn.classList.add('pointer-events-none', 'opacity-50');
            }

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
            orderList.querySelectorAll('.remove-item').forEach(btn => {
                btn.onclick = () => {
                    const name = btn.getAttribute('data-name');
                    delete cart[name];
                    renderCart();
                };
            });
        }

        // Event listener untuk tombol plus/minus di menu
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

        // Render order details
        function renderOrderDetails() {
            const orderDetailsList = document.getElementById('orderDetailsList');
            orderDetailsList.innerHTML = '';
            let subtotal = 0;

            Object.values(cart).forEach(item => {
                const itemTotal = item.price * item.qty;
                subtotal += itemTotal;

                const div = document.createElement('div');
                div.className = "flex items-center gap-4 border-b pb-3";
                div.innerHTML = `
                    <img src="${item.img}" alt="${item.name}" class="w-[60px] h-[60px] rounded-full object-cover border border-gray-300">
                    <div class="flex-1">
                        <div class="font-semibold">${item.name}</div>
                        <div class="text-sm text-gray-600">${formatRupiah(item.price)} x ${item.qty}</div>
                    </div>
                    <div class="font-semibold text-right">${formatRupiah(itemTotal)}</div>
                `;
                orderDetailsList.appendChild(div);
            });

            document.getElementById('orderSubTotal').textContent = formatRupiah(subtotal);
        }

        // Navigasi antara section
        document.getElementById('goToOrderBtn').addEventListener('click', function() {
            if (Object.keys(cart).length > 0) {
                document.getElementById('orderSummarySection').classList.add('hidden');
                document.getElementById('formSection').classList.remove('hidden');
            }
        });

        document.getElementById('backToOrderBtn').addEventListener('click', function() {
            document.getElementById('formSection').classList.add('hidden');
            document.getElementById('orderSummarySection').classList.remove('hidden');
        });

        document.getElementById('confirmOrderBtn').addEventListener('click', function() {
            // Ambil nilai input
            const name = document.querySelector('input[placeholder="Name"]');
            const phone = document.querySelector('input[placeholder="Phone Number"]');
            const address = document.querySelector('textarea[placeholder="Delivery Address"]');
            let valid = true;

            // Reset error style
            [name, phone, address].forEach(input => input.classList.remove('border-red-500'));

            // Validasi
            if (!name.value.trim()) {
                name.classList.add('border-red-500');
                valid = false;
            }
            if (!phone.value.trim()) {
                phone.classList.add('border-red-500');
                valid = false;
            }
            if (!address.value.trim()) {
                address.classList.add('border-red-500');
                valid = false;
            }

            if (!valid) {
                // Optionally, tampilkan pesan error global
                alert('Mohon lengkapi data pemesan!');
                return;
            }

            // Jika valid, lanjut ke order details
            renderOrderDetails();
            document.getElementById('formSection').classList.add('hidden');
            document.getElementById('orderDetailsSection').classList.remove('hidden');
        });

        document.getElementById('backToFormBtn').addEventListener('click', function() {
            document.getElementById('orderDetailsSection').classList.add('hidden');
            document.getElementById('formSection').classList.remove('hidden');
        });

        // inisialisasi saat halaman 
        document.addEventListener('DOMContentLoaded', () => {
            setupMenuButtons();
            renderCart();
        });
        // Proceed to Payment
        document.querySelector('#orderDetailsSection button').addEventListener('click', function() {
            document.getElementById('orderDetailsSection').classList.add('hidden');
            document.getElementById('paymentSection').classList.remove('hidden');
        });

        // Back to Order Details
        document.getElementById('backToOrderDetailsBtn').addEventListener('click', function() {
            document.getElementById('paymentSection').classList.add('hidden');
            document.getElementById('orderDetailsSection').classList.remove('hidden');
        });

        // Tampilkan/sembunyikan upload proof berdasarkan metode pembayaran
        document.querySelectorAll('input[name="paymentMethod"]').forEach(radio => {
            radio.addEventListener('change', function() {
                const wrapper = document.getElementById('uploadProofWrapper');
                if (this.value === 'transfer') {
                    wrapper.style.display = 'block';
                    document.getElementById('paymentProof').setAttribute('required', '');
                } else {
                    wrapper.style.display = 'none';
                    document.getElementById('paymentProof').removeAttribute('required');
                    document.getElementById('proofError').classList.add('hidden');
                }
            });
        });

        // Validasi sebelum complete order
        document.getElementById('completeOrderBtn').addEventListener('click', function() {
            const paymentMethod = document.querySelector('input[name="paymentMethod"]:checked').value;
            const paymentProof = document.getElementById('paymentProof');

            if (paymentMethod === 'transfer' && !paymentProof.files[0]) {
                document.getElementById('proofError').classList.remove('hidden');
                paymentProof.scrollIntoView({
                    behavior: 'smooth',
                    block: 'center'
                });
                return;
            }

            // Jika validasi berhasil, lanjutkan
            document.getElementById('paymentSection').classList.add('hidden');
            document.getElementById('successPopup').classList.remove('hidden');
        });

        // Close popup
        document.getElementById('closeSuccessPopup').addEventListener('click', function() {
            document.getElementById('successPopup').classList.add('hidden');
            // Reset ke tampilan awal (order summary)
            document.getElementById('orderSummarySection').classList.remove('hidden');
            document.getElementById('formSection').classList.add('hidden');
            document.getElementById('orderDetailsSection').classList.add('hidden');
            document.getElementById('paymentSection').classList.add('hidden');
            // Reset cart dan tampilan
            cart = {};
            renderCart();
        });
    </script>
</body>

</html>
