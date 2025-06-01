<?php

use App\Http\Controllers\ControllerUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/order', function () {
    return view('order');
})->name('order');

Route::get('/catering', function () {
    return view('catering');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/contactus', function () {
    return view('contactus');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/admin/datasiswa', function () {
    return view('admin.datasiswa');
});

Route::get('/admin/datapesanan', function () {
    return view('admin.datapesanan');
});

Route::get('/admin/datakehadiran', function () {
    return view('admin.datakehadiran');
});

// Route::get('/admin/daftarmenu', function () {
//     return view('admin.daftarmenu');
// });

Route::get('/admin/daftarmenu',[ControllerUser::class, 'daftarmenu'])->name('login.daftarmenu');

Route::get('/admin/login',[ControllerUser::class, 'login'])->name('login');
Route::post('/admin/login', [ControllerUser::class, 'loginAction'])->name('login.action');



// Route::get('/admin/login', function () {
//     return view('admin.login');
// });