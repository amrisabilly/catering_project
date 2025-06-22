<?php

namespace App\Http\Controllers;
use App\Models\ModelMenu;
use App\Models\ModelOrder;
use Illuminate\Http\Request;

class ControllerLanding
{
    //
    public function index()
    {
    $order = null;
    if (session()->has('order_details')) {
        $orderId = session('order_details.order_id') ?? null;
        if ($orderId) {
            $order = ModelOrder::find($orderId);
        }
    }
        $mainCourse = ModelMenu::where('kategori', 'main course')->get();
        $riceBowl = ModelMenu::where('kategori', 'Rice Bowl')->get();

        return view('order', compact('mainCourse', 'riceBowl','order'));
    }
}
