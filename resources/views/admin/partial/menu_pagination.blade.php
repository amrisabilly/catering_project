<nav class="flex items-center space-x-2 text-sm" id="paginationNav">
    {{-- Tombol Previous --}}
    @if ($menus->onFirstPage())
        <span class="px-3 py-1 bg-gray-200 text-gray-700 rounded cursor-pointer">Previous</span>
    @else
        <a href="{{ $menus->previousPageUrl() }}"
            class="px-3 py-1 bg-gray-200 text-gray-700 rounded cursor-pointer">Previous</a>
    @endif

    {{-- Tombol nomor halaman --}}
    @foreach ($menus->getUrlRange(1, $menus->lastPage()) as $page => $url)
        @if ($page == $menus->currentPage())
            <span class="px-3 py-1 bg-[#22668D] text-white rounded">{{ $page }}</span>
        @else
            <a href="{{ $url }}"
                class="px-3 py-1 bg-white border border-gray-300 rounded">{{ $page }}</a>
        @endif
    @endforeach

    {{-- Tombol Next --}}
    @if ($menus->hasMorePages())
        <a href="{{ $menus->nextPageUrl() }}"
            class="px-3 py-1 bg-gray-200 text-gray-700 rounded cursor-pointer">Next</a>
    @else
        <span class="px-3 py-1 bg-gray-200 text-gray-700 rounded cursor-pointer">Next</span>
    @endif
</nav>