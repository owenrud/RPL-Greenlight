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
    return view('pemesan.home_pemesan');
});
Route::get('/home', function () {
    return view('pemesan.home_pemesan');
});
Route::get('/listbus', function () {
    return view('pemesan.daftarbus');
});
Route::get('/about', function () {
    return view('pemesan.about');
});
Route::get('/booking', function () {
    return view('pemesan.booking');
});
Route::get('/pbooking', function () {
    return view('pemesan.personal_booking');
});
Route::get('/booking/invoice', function () {
    return view('pemesan.invoice');
});
Route::get('/booking/payment', function () {
    return view('pemesan.payment');
});
Route::get('/details', function () {
    return view('pemesan.details');
});
Route::get('/pilihbooking', function () {
    return view('pemesan.list_booking');
});
Route::get('/cart', function () {
    return view('pemesan.shop_cart');
});


Route::get('/register', function () {
    return view('pemesan.register');
});


Route::get('/login', [App\Http\Controllers\LoginController::class,'login']);
Route::post('/login/validate', [App\Http\Controllers\LoginController::class,'check']);


Route::get('/admin', function () {
    return view('welcome');
});



//Route::get('/auth/redirect', [App\Http\Controllers\Auth\LoginController::class, 'redirectToProvider']);
//Route::get('/auth/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleProviderCallback']);