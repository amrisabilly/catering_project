<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Laporan Data Siswa</title>
  <script src="//unpkg.com/alpinejs" defer></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body, * {
      font-family: 'Poppins', sans-serif !important;
    }
  </style>
</head>

<body class="bg-[#FFFADD]">
  @include('components.navbaradmin')
    <div class="min-h-screen bg-[#FFFADD] p-9">
        <!-- Header -->
        <div class="flex justify-between items-center mb-6 pl-10">
            <h1 class="text-[20px] font-semibold">Order History</h1>
            <div class="flex items-center gap-2">
                <span class="text-gray-800 font-semibold text-[20px]">Admin</span>
                <div class="w-[40px] h-[40px] bg-[#FFCC70] rounded-full flex items-center justify-center text-white font-bold">
                    <img src="/img/admin/datasiswa/user.png" alt="user" class="w-[31px] h-[31px]">
                </div>
            </div>
        </div>

        <!-- Card Orders -->
        <div x-data="{ open: false }" class="flex flex-col items-center space-y-2">
            <!-- Card Order 1 -->
            <div class="bg-white rounded-xl shadow-md mb-5 p-5 w-full max-w-6xl">
                <div class="flex justify-between mb-2">
                    <div class="font-semibold">Order-1</div>
                    <div class="text-sm text-[#A3A3A3]">April 9, 2025, 08.30 AM</div>
                </div>
                <div class="grid grid-cols-6 space-x-10">
                    <div>
                        <div class="text-sm font-semibold text-gray-700">Name</div>
                        <div class="font-medium">Zahirah Salsabila</div>
                    </div>
                    <div>
                        <div class="text-sm font-semibold text-gray-700">Total</div>
                        <div class="font-medium text-red-500">Rp. 160.000</div>
                    </div>
                    <div class="col-span-2">
                        <div class="text-sm font-semibold text-gray-700">Delivery Address</div>
                        <div class="flex items-center gap-1">
                        <img src="/img/admin/datapesanan/location.png" alt="location" class="w-[20px] h-[20px]">
                            <span class="whitespace-nowrap font-medium">Jalan Ganet, Perumahan Ganet Indah</span>
                        </div>
                    </div>
                    <div>
                        <div class="text-sm font-semibold text-gray-700 mb-1">Status</div>
                        <div class="flex gap-2">
                            <div class="w-4 h-4 rounded-full bg-gray-300"></div>
                            <div class="w-4 h-4 rounded-full bg-yellow-400"></div>
                            <div class="w-4 h-4 rounded-full bg-green-500"></div>
                        </div>
                    </div>
                    <div class="col-span-1 flex justify-end items-center">
                        <div class="w-[40px] h-[40px] bg-[#E1E1E1] rounded-full flex items-center justify-center cursor-pointer"
                        @click="open = !open">
                            <img 
                                :class="{'rotate-180': open}" 
                                src="/img/admin/datapesanan/down.png" 
                                alt="down" 
                                class="w-[30px] h-[30px] transition-transform duration-200"
                            >
                        </div>
                    </div>
                </div>
                <!-- Detail informasinya, muncul jika open=true -->
                <div x-show="open" x-transition class="mt-4 border-t pt-4">
                    <div class="grid grid-cols-3 gap-4">
                        <div>
                            <div class="text-sm font-semibold text-gray-700">Note</div>
                            <div class="text-gray-700 text-[14px] font-medium">Ayamnya bagian dada, cabenya yang banyak.</div>
                        </div>
                        <div>
                            <div class="text-sm font-semibold text-gray-700 mb-2">Order Menu</div>
                            <div class="flex flex-col gap-2 font-poppins font-medium text-[12px] text-gray-500">
                                <!-- Menu 1 -->
                                <div class="flex items-center gap-2 pb-2">
                                    <img src="/img/admin/datapesanan/menu1.png" alt="menu1" class="w-auto h-auto rounded-full object-cover">
                                    <div>
                                        <span class="block">Ayam Katsu</span>
                                        <span class="block text-gray-500">Rp.20.000 x3</span>
                                    </div>
                                    <div class="ml-auto flex flex-col items-end">
                                        <span class="text-gray-500">Total</span>
                                        <span class="font-semibold text-gray-700">Rp.60.000</span>
                                    </div>
                                </div>
                                <!-- Garis pemisah -->
                                <div class="border-t border-gray-300"></div>
                                <!-- Menu 2 -->
                                <div class="flex items-center gap-2 pt-2">
                                    <img src="/img/admin/datapesanan/menu2.png" alt="menu2" class="w-auto h-auto rounded-full object-cover">
                                    <div>
                                        <span class="block">Telur Puyuh</span>
                                        <span class="block text-gray-500">Rp.20.000 x5</span>
                                    </div>
                                    <div class="ml-auto flex flex-col items-end">
                                        <span class="text-gray-500">Total</span>
                                        <span class="font-semibold text-gray-700">Rp.100.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Status & Payment Column -->
                        <div class="flex flex-col gap-4 pl-7">
                            <div>
                                <div class="text-sm font-semibold text-gray-700">Payment Method</div>
                                <div class="text-gray-700">Cash</div>
                            </div>
                            <div>
                                <div class="text-sm font-semibold text-gray-700">Status Pesanan</div>
                                <div class="text-green-600 font-bold">Selesai</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end card order 1 --}}

        </div>

        <!-- Pagination -->
        <div class="fixed bottom-6 left-0 w-full flex justify-center items-end z-50">
            <nav class="flex items-center space-x-2 text-sm">
            <button class="px-3 py-1 bg-gray-200 text-gray-700 rounded">Previous</button>
            <button class="px-3 py-1 bg-[#22668D] text-white rounded">1</button>
            <button class="px-3 py-1 bg-white border border-gray-300 rounded">2</button>
            <button class="px-3 py-1 bg-white border border-gray-300 rounded">3</button>
            <button class="px-3 py-1 bg-gray-200 text-gray-700 rounded">Next</button>
            </nav>
        </div>
    </div>
</body>
</html>
