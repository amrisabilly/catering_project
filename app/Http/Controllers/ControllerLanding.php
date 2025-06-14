<?php

namespace App\Http\Controllers;
use App\Models\ModelMenu;

use Illuminate\Http\Request;

class ControllerLanding
{
    //
    public function index()
    {
        $mainCourse = ModelMenu::where('kategori', 'main course')->get();
        $riceBowl = ModelMenu::where('kategori', 'Rice Bowl')->get();

        return view('order', compact('mainCourse', 'riceBowl'));
    }
}
