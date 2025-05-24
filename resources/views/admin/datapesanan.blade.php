@extends('layouts.app')
{{-- Navbar --}}
@include('components.navbaradmin')
{{-- End Navbar --}}

@section('content')
@php
// Tambahkan dummy data agar $orders tidak error meski tanpa controller
$orders = [
    (object)[
        'date' => now(),
        'name' => 'Budi',
        'total' => 50000,
        'address' => 'Jl. Mawar No. 1',
        'status' => 'pending',
        'note' => 'Tanpa sambal',
        'payment_method' => 'Cash',
        'menu' => [
            [
                'image' => '/img/menu/nasi-goreng.jpg',
                'name' => 'Nasi Goreng',
                'price' => 25000,
                'qty' => 2,
                'total' => 50000
            ]
        ]
    ]
];
@endphp

<div class="min-h-screen bg-yellow-50 p-6">
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold">Order History</h1>
        <div class="flex items-center gap-2 font-semibold">
            <span>Admin</span>
            <div class="bg-yellow-400 rounded-full p-2">
                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 10a4 4 0 100-8 4 4 0 000 8zm0 2c-5.333 0-8 2.667-8 4v2h16v-2c0-1.333-2.667-4-8-4z" />
                </svg>
            </div>
        </div>
    </div>

    <!-- Pesanan List -->
    <div class="space-y-4">
        @foreach ($orders as $index => $order)
        <div class="bg-white rounded-lg shadow-md p-4 transition-all duration-300">
            <div class="flex justify-between items-center">
                <div class="flex flex-col md:flex-row md:items-center gap-4">
                    <div>
                        <div class="font-semibold">Order-{{ $index + 1 }}</div>
                        <div class="text-gray-400 text-sm">{{ \Carbon\Carbon::parse($order->date)->format('F j, Y, h.i A') }}</div>
                    </div>
                    <div><span class="font-semibold">Name</span><br>{{ $order->name }}</div>
                    <div><span class="font-semibold">Total</span><br><span class="text-red-600 font-bold">Rp. {{ number_format($order->total, 0, ',', '.') }}</span></div>
                    <div><span class="font-semibold">Delivery Address</span><br>
                        <div class="flex items-center gap-1">
                            <svg class="w-4 h-4 text-black" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 2a6 6 0 00-6 6c0 4.5 6 10 6 10s6-5.5 6-10a6 6 0 00-6-6zM8 9a2 2 0 114 0 2 2 0 01-4 0z"/>
                            </svg>
                            <span>{{ $order->address }}</span>
                        </div>
                    </div>
                    <div><span class="font-semibold">Status</span><br>
                        <div class="flex items-center gap-2 mt-1">
                            <div class="w-4 h-4 rounded-full {{ $order->status == 'pending' ? 'bg-gray-300' : 'bg-gray-100' }}"></div>
                            <div class="w-4 h-4 rounded-full {{ $order->status == 'processing' ? 'bg-yellow-400' : 'bg-gray-100' }}"></div>
                            <div class="w-4 h-4 rounded-full {{ $order->status == 'completed' ? 'bg-green-500' : 'bg-gray-100' }}"></div>
                        </div>
                    </div>
                </div>
                <!-- Toggle Detail -->
                <button type="button" onclick="document.getElementById('detail-{{ $index }}').classList.toggle('hidden')">
                    <svg class="w-6 h-6 text-gray-600 transform transition-transform hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
            </div>

            <!-- Detail Expand -->
            <div id="detail-{{ $index }}" class="hidden mt-4 border-t pt-4">
                <div class="grid md:grid-cols-3 gap-4">
                    <div>
                        <div class="text-gray-500 text-sm mb-1">Note</div>
                        <p>{{ $order->note }}</p>
                    </div>
                    <div>
                        <div class="text-gray-500 text-sm mb-1">Order Menu</div>
                        @foreach ($order->menu as $item)
                        <div class="flex items-center justify-between mb-2">
                            <div class="flex items-center gap-2">
                                <img src="{{ $item['image'] }}" alt="" class="w-10 h-10 rounded-full object-cover">
                                <div>
                                    <div class="font-semibold">{{ $item['name'] }}</div>
                                    <div class="text-sm text-gray-500">Rp.{{ number_format($item['price'], 0, ',', '.') }} x {{ $item['qty'] }}</div>
                                </div>
                            </div>
                            <div class="font-semibold">Rp.{{ number_format($item['total'], 0, ',', '.') }}</div>
                        </div>
                        @endforeach
                    </div>
                    <div class="flex flex-col justify-center items-start">
                        <div class="text-gray-500 text-sm mb-1">Payment Method</div>
                        <div class="font-semibold mb-4">{{ $order->payment_method }}</div>
                        <div class="text-lg font-bold text-gray-800">Pesanan Selesai</div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="flex justify-center mt-6 space-x-2">
        <button class="px-3 py-1 bg-gray-300 text-sm rounded">Previous</button>
        <button class="px-3 py-1 bg-blue-500 text-white text-sm rounded">1</button>
        <button class="px-3 py-1 bg-yellow-100 text-sm rounded">2</button>
        <button class="px-3 py-1 bg-yellow-100 text-sm rounded">3</button>
        <button class="px-3 py-1 bg-gray-300 text-sm rounded">Next</button>
    </div>
</div>
@endsection