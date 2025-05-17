<?php
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
