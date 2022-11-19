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
Route::get('/register', function () {
    return view('pemesan.register');
});
Route::get('/details/{id}', [App\Http\Controllers\Daftar_busController::class,'details_bus']);
Route::get('/login', [App\Http\Controllers\LoginController::class,'login'])->middleware('guest')->name('login');
Route::post('/login/validate', [App\Http\Controllers\LoginController::class,'check']);
Route::post('/register/createuser', [App\Http\Controllers\LoginController::class,'saveuser']);
Route::get('/logout', [App\Http\Controllers\LoginController::class,'logout']);



Route::group(['middleware' => 'auth'], function () {
    Route::get('/booking/{id}', [App\Http\Controllers\Daftar_busController::class,'booking']);
    Route::get('/pbooking/{id}', [App\Http\Controllers\Daftar_busController::class,'personal_booking']);
    Route::post('/booking/invoice', [App\Http\Controllers\Daftar_busController::class,'invoice']);
    Route::post('/booking/invoice/upload', [App\Http\Controllers\Daftar_busController::class,'upload']);
    Route::post('/pilihbooking', [App\Http\Controllers\Daftar_busController::class,'list_booking']);
    Route::get('/cart', function () {
        return view('pemesan.shop_cart');
    });
});


// ADminnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn

Route::get('/admin', function () {
    return view('welcome');
});

Route::get('/adminDashboard', function () {
    return view('admin.dashboard');
});
Route::get('/validatePribadi', function () {
    return view('admin.validatePribadi');
});
Route::get('/validateInstansi', function () {
    return view('admin.validateInstansi');
});
Route::get('/dataBus', [App\Http\Controllers\DaftarBus_AdminController::class,'getAllBus']);
Route::get('/dataUser', [App\Http\Controllers\DataUserController::class,'getAllUsers']);
Route::get('/formInputUser', [App\Http\Controllers\DataUserController::class,'create']);
Route::post('/addDataUser', [App\Http\Controllers\DataUserController::class,'addDataUser']);

Route::get('/404', function () {
    return view('eror');
});



//Route::get('/auth/redirect', [App\Http\Controllers\Auth\LoginController::class, 'redirectToProvider']);
//Route::get('/auth/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleProviderCallback']);