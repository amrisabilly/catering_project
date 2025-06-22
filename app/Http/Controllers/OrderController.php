<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelOrder;
use App\Models\ModelItem;
use App\Models\ModelMenu;
use Illuminate\Support\Facades\DB;
class OrderController
{
    public function addToCart(Request $request)
{
    $request->validate([
        'menu_id' => 'required|exists:tabel_menu,id',
        'qty' => 'required|integer|min:1',
    ]);

    $menu = \App\Models\ModelMenu::find($request->menu_id);

    $cart = session('cart', []);
    $found = false;
    foreach ($cart as &$item) {
        if ($item['menu_id'] == $menu->id) {
            $item['qty'] += $request->qty;
            $found = true;
            break;
        }
    }
    if (!$found) {
        $cart[] = [
            'menu_id' => $menu->id,
            'nama_menu' => $menu->nama_menu,
            'harga' => $menu->harga,
            'qty' => $request->qty,
        ];
    }
    session(['cart' => $cart]);
    return back()->with('success', 'Menu berhasil masuk keranjang!');
}

public function store(Request $request)
{
    $request->validate([
        'nama' => 'required',
        'no_hp' => 'required',
        'alamat' => 'required',
        'catatan' => 'nullable',
        'cart_json' => 'required',
    ]);

    $cart = json_decode($request->cart_json, true);

    if (!$cart || count($cart) == 0) {
        return back()->with('error', 'Keranjang kosong!');
    }

    $total = 0;
    foreach ($cart as $item) {
        $total += $item['price'] * $item['qty'];
    }

    $order = \App\Models\ModelOrder::create([
        'nama' => $request->nama,
        'no_hp' => $request->no_hp,
        'alamat' => $request->alamat,
        'catatan' => $request->catatan,
        'total_price' => $total,
    ]);

    foreach ($cart as $item) {
        \App\Models\ModelItem::create([
            'order_id' => $order->id,
            'menu_id' => $item['menu_id'], // tambahkan ini
            'qty' => $item['qty'],
            'price' => $item['price'],
            'subtotal' => $item['price'] * $item['qty'],
        ]);
    }

     // Tambahkan baris ini:
    session(['order_id' => $order->id]);


return redirect()->route('index')
    ->with('success', 'Pesanan berhasil disimpan!')
    ->with('order_details', [
        'order_id' => $order->id, // tambahkan juga order_id di sini
        'nama' => $order->nama,
        'no_hp' => $order->no_hp,
        'alamat' => $order->alamat,
        'catatan' => $order->catatan,
        'total_price' => $order->total_price,
        'items' => $order->items()->with('menu')->get()->toArray(),
    ]);
}

public function updatePembayaran(Request $request, $id)
{
    $request->validate([
        'paymentMethod' => 'required|in:transfer,cod',
        'paymentProof' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $order = \App\Models\ModelOrder::findOrFail($id);

    $bukti = $order->bukti_pembayaran;
        if ($request->paymentMethod === 'transfer' && $request->hasFile('paymentProof')) {
        $bukti = $request->file('paymentProof')->store('bukti_pembayaran', 'public');
    }

    $order->update([
        'status_pembayaran' => $request->paymentMethod === 'transfer' ? 'menunggu konfirmasi' : 'lunas',
        'metode_pembayaran' => $request->paymentMethod,
        'bukti_pembayaran' => $bukti,
        'tanggal_pembayaran' => now(),
    ]);

    return redirect()->route('index')->with('success', 'Pembayaran berhasil disimpan!');
}



}
