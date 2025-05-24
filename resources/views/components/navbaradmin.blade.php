<div x-data="{ sidebarOpen: true }" class="absolute flex font-sans bg-transparent z-0 min-h-screen">
    <!-- Sidebar -->
    <div 
        class="w-[350px] h-screen bg-[#002E48] flex-shrink-0 flex flex-col py-10 px-8 transition-transform duration-300 z-20 fixed md:static"
        :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'"
        style="will-change: transform;"
    >
        <nav class="flex flex-col gap-6 ">
            <a href="/admin/dashboard" class="flex items-center text-white text-base  hover:text-[#FFCC70] transition font-poppins font-medium mt-10">
                <img src="/img/admin/dashboard/dashboard.png" alt="Dashboard" class="w-[30px] h-[30px] ml-6" />
                <span class="ml-3">Dashboard</span>
            </a>

            <div class="flex items-center text-white text-base font-poppins font-medium ml-2" style="opacity: 0.6">
                <span class="ml-6">Admin</span>
            </div>

            <a href="/admin/datasiswa" class="flex items-center text-white text-base hover:text-[#FFCC70] transition font-poppins font-medium">
                <img src="/img/admin/dashboard/laporan.png" alt="Data Siswa" class="w-[30px] h-[30px] ml-6" />
                <span class="ml-4">Laporan Data Siswa</span>
            </a>

            <a href="/admin/datapesanan" class="flex items-center text-white text-base hover:text-[#FFCC70] transition font-poppins font-medium">
                <img src="/img/admin/dashboard/laporan.png" alt="Data Pesanan" class="w-[30px] h-[30px] ml-6" />
                <span class="ml-4">Laporan Data Pesanan</span>
            </a>

            <a href="/admin/datakehadiran" class="flex items-center text-white text-base hover:text-[#FFCC70] transition font-poppins font-medium">
                <img src="/img/admin/dashboard/laporan.png" alt="Kehadiran" class="w-[30px] h-[30px] ml-6" />
                <span class="ml-4">Laporan Kehadiran Siswa</span>
            </a>

            <a href="/admin/menu" class="flex items-center text-white text-base hover:text-[#FFCC70] transition font-poppins font-medium">
                <img src="/img/admin/dashboard/menu.png" alt="Menu" class="w-[30px] h-[30px] ml-6" />
                <span class="ml-4">Menu</span>
            </a>

            <div class="flex items-center text-white text-opacity-[50%] font-poppins font-medium  ml-2 mb-4" style="opacity: 0.6">
                <span class="ml-4">Documentation</span>
            </div>

            <a href="/admin/download" class="flex items-center text-white text-base hover:text-[#FFCC70] transition font-poppins font-medium">
                <img src="/img/admin/dashboard/download.png" alt="Download" class="w-[30px] h-[30px] ml-6" />
                <span class="ml-4">Download</span>
            </a>

            <a href="/admin" class="flex items-center text-white text-base hover:text-[#FFCC70] transition font-poppins font-medium">
                <img src="/img/admin/dashboard/logout.png" alt="Logout" class="w-[30px] h-[30px] ml-6" />
                <span class="ml-4">Log Out</span>
            </a>
        </nav>
    </div>

    <!-- Option Button -->
    <button
        class="fixed top-8 left-4 z-30 bg-[#FFCC70] rounded-full w-[41px] h-[41px] flex items-center justify-center text-white text-xl transition-all duration-300 shadow-lg"
        :class="sidebarOpen ? 'translate-x-[350px]' : 'translate-x-0'"
        @click="sidebarOpen = !sidebarOpen"
        aria-label="Toggle Sidebar"
        style="will-change: transform;"
    >
        <img src="/img/admin/dashboard/option.png" class="w-auto h-auto" alt="menu" />
    </button>

    <!-- Overlay for mobile -->
    <div 
        class="fixed inset-0 bg-black bg-opacity-40 z-10 transition-opacity duration-300 md:hidden"
        x-show="sidebarOpen"
        x-transition.opacity
        @click="sidebarOpen = false"
        style="display: none;"
    ></div>
</div>