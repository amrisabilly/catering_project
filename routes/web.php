<?php

use App\Http\Controllers\ControllerUser;
use App\Http\Controllers\ControllerMenu;
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


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [ControllerUser::class, 'showLogin'])->name('login');
    Route::post('/login-action', [ControllerUser::class, 'login'])->name('login.action');
    Route::get('/logout', [ControllerUser::class, 'logout'])->name('logout');

});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/daftarmenu', [ControllerMenu::class, 'index'])->name('daftarmenu');
    Route::post('/daftarmenu', [ControllerMenu::class, 'store'])->name('daftarmenu.store');
    Route::get('/daftarmenu/{id}/edit', [ControllerMenu::class, 'edit'])->name('daftarmenu.edit');
    Route::put('/daftarmenu/{id}', [ControllerMenu::class, 'update'])->name('daftarmenu.update');
    Route::delete('/daftarmenu/{id}', [ControllerMenu::class, 'destroy'])->name('daftarmenu.destroy');
});



// Route::get('/admin/login', function () {
//     return view('admin.login');
// });