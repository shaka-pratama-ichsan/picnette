<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/photo-studio', function () {
    return view('photo-studio');
});

Route::get('/photo-print', function () {
    return view('photo-print');
});

Route::get('/detail-produk', function () {
    return view('detail-produk');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/pesanan', function () {
    return view('pesanan');
});

Route::get('/booking', function () {
    return view('booking-form');
});

Route::get('/admin', function () {
    return view('dashboard-admin');
});