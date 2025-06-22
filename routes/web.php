<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerUser;
use App\Http\Controllers\ControllerMenu;
use App\Http\Controllers\ControllerDataSiswa; 
use App\Http\Controllers\ControllerDataPesanan;
use App\Http\Controllers\ControllerDataKehadiran;
use App\Http\Controllers\ControllerLanding;
use App\Http\Controllers\OrderController;


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Route::get('/order', function () {
//     return view('order');
// })->name('order');

Route::get('/order', [ControllerLanding::class, 'index'])->name('index');
Route::post('/cart/add', [OrderController::class, 'addToCart'])->name('cart.add');
Route::post('/order/store', [OrderController::class, 'store'])->name('order.store');
Route::post('/order/payment/{id}', [OrderController::class, 'updatePembayaran'])->name('order.payment');

Route::get('/catering', function () {
    return view('catering');
});

Route::get('/formdaftar', function () {
    return view('formdaftar');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/contactus', function () {
    return view('contactus');
});

// Route::get('/admin/dashboard', function () {
//     return view('admin.dashboard');
// });

// Route::get('/admin/datasiswa', function () {
//     return view('admin.datasiswa');
// });

// Route::get('/admin/datapesanan', function () {
//     return view('admin.datapesanan');
// });

// Route::get('/admin/datakehadiran', function () {
//     return view('admin.datakehadiran');
// });

// Route::prefix('landing')->name('landing.')->group(function () {
//     Route::get('/', function () {
//         return view('landing.index');
//     })->name('index');

//     Route::get('/order', function () {
//         return view('landing.order');
//     })->name('order');

//     Route::get('/catering', function () {
//         return view('landing.catering');
//     })->name('catering');

//     Route::get('/aboutus', function () {
//         return view('landing.aboutus');
//     })->name('aboutus');

//     Route::get('/contactus', function () {
//         return view('landing.contactus');
//     })->name('contactus');
// });

Route::delete('/admin/pesanan/{id}', [ControllerDataPesanan::class, 'destroy'])->name('admin.pesanan.delete');
Route::post('/admin/pesanan/konfirmasi/{id}', [ControllerDataPesanan::class, 'konfirmasi'])->name('admin.pesanan.konfirmasi');


// Dashboard Admin
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [ControllerUser::class, 'showLogin'])->name('login');
    Route::post('/login-action', [ControllerUser::class, 'login'])->name('login.action');
    Route::get('/logout', [ControllerUser::class, 'logout'])->name('logout');

    Route::get('/dashboard', [ControllerUser::class, 'index'])->name('index');


    // Menu Management
    Route::get('/daftarmenu', [ControllerMenu::class, 'index'])->name('daftarmenu');
    Route::post('/daftarmenu', [ControllerMenu::class, 'store'])->name('daftarmenu.store');
    Route::get('/daftarmenu/{id}/edit', [ControllerMenu::class, 'edit'])->name('daftarmenu.edit');
    Route::put('/daftarmenu/{id}', [ControllerMenu::class, 'update'])->name('daftarmenu.update');
    Route::delete('/daftarmenu/{id}', [ControllerMenu::class, 'destroy'])->name('daftarmenu.destroy');

    // Data Siswa Management
    Route::get('/datasiswa', [ControllerDataSiswa::class, 'index'])->name('datasiswa');
    Route::post('/datasiswa', [ControllerDataSiswa::class, 'store'])->name('datasiswa.store');
    Route::put('/datasiswa/{id}', [ControllerDataSiswa::class, 'update'])->name('datasiswa.update');
    Route::delete('/datasiswa/{id}', [ControllerDataSiswa::class, 'destroy'])->name('datasiswa.destroy');

    // Data Masuk
    Route::get('/datapesanan', [ControllerDataPesanan::class, 'index'])->name('datapesanan');


    // Data Kehadiran
    Route::get('/datakehadiran', [ControllerDataKehadiran::class, 'index'])->name('datakehadiran');
});




// Route::get('/admin/login', function () {
//     return view('admin.login');
// });