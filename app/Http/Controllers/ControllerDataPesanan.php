<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelOrder;

class ControllerDataPesanan
{
    //
    public function index()
    {
        // Ambil pesanan dengan pagination (misal 5 per halaman)
        $orders = ModelOrder::with(['items.menu'])->orderByDesc('created_at')->paginate(3);
        return view('admin.datapesanan', compact('orders'));
    }

    public function destroy($id)
    {
        $order = \App\Models\ModelOrder::findOrFail($id);
        $order->items()->delete();
        $order->delete();
        return redirect()->back()->with('success', 'Pesanan berhasil dihapus!');
    }

    public function konfirmasi($id)
    {
        $order = \App\Models\ModelOrder::findOrFail($id);
        $order->status_pembayaran = 'lunas';
        $order->save();
        return redirect()->back()->with('success', 'Status pesanan dikonfirmasi!');
    }
}
