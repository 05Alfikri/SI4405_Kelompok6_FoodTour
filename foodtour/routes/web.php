<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// ==================== User Route ====================
Route::get('/register', [UserController::class, 'regiser'])->name('register.get');
Route::post('/register', [UserController::class, 'register']);
Route::get('/login', [UserController::class, 'login'])->name('login.get');
Route::post('/login', [UserController::class, 'loginUser'])->name('login.post');
Route::get('/logout', [UserController::class, 'logout'])->name('logout.get');
route::post('/logout', [UserController::class, 'logoutUser']);

Route::post('pemesanan', [BookingController::class, 'Book'])->name('pemesanan.post');


// ==================== Website Route ====================
Route::get('/', function () {
    return view('homeuser');
});

Route::get('/login', function () {
    return view('loginUser');
});

Route::get('/loginUser', function () {
    return view('loginUser');
});

Route::get('/loginAdmin', function () {
    return view('loginAdmin');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/packages', function () {
    return view('packagesUser');
});

Route::get('/miekocok', function () {
    return view('miekocok');
});

Route::get('/book', function () {
    return view('pemesanan');
});

Route::get('/pemesanan', function () {
    return view('pembayaran');
});

Route::get('/ticket', function () {
    return view('ticket');
});

