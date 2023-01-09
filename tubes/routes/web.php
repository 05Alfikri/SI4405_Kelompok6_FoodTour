<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;

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
Route::get('/register', [LoginController::class, 'regiser'])->name('register.get');
Route::post('/register', [LoginController::class, 'register']);
Route::get('/login', [LoginController::class, 'login'])->name('login.get');
Route::post('/login', [LoginController::class, 'loginUser'])->name('login.post');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout.get');
route::post('/logout', [LoginController::class, 'logoutUser']);

Route::post('/pemesananWisata', [TourController::class, 'book'])->name('pemesananWisata');
Route::get('/ticket', [TourController::class, 'tiket'])->name('tiket');
Route::post('pemesananMakanan', [FoodController::class, 'Food'])->name('pemesananMakanan.post');
Route::get('/detailUser/{id}', [TourController::class, 'detailUser'])->name('detailUser');
Route::get('/detailMakanan/{id}', [TourController::class, 'detailMakanan'])->name('detailUser');
Route::get('/pembayaran/{id}', [TourController::class, 'pembayaran'])->name('pembayaran');
Route::post('/pembayaran/{id}', [TourController::class, 'storePembayaran']);
Route::get('/pembayaran-makanan/{id}', [TourController::class, 'pembayaranMakanan'])->name('pembayaranMakanan');
Route::post('/pembayaran-makanan/{id}', [TourController::class, 'storePembayaranMakanan']);

Route::get('/service', [AdminController::class, 'admin'])->name('admin');
Route::get('/update-status/{id}', [AdminController::class, 'updateStatus'])->name('updateStatus');
Route::post('/update-status/{id}', [AdminController::class, 'storeUpdateStatus']);
Route::get('/update-status-makanan/{id}', [AdminController::class, 'updateStatusMakanan'])->name('updateStatus');
Route::post('/update-status-makanan/{id}', [AdminController::class, 'storeUpdateStatusMakanan']);
Route::post('/delete/{id}', [AdminController::class, 'delete'])->name('delete');
Route::post('/delete-makanan/{id}', [AdminController::class, 'deleteMakanan'])->name('deleteMakanan');

// ==================== Website Route ====================
Route::get('/', function () {
    return view('home');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/packages', function () {
    return view('packages');
});

Route::get('/book', [function () {
    return view('pemesananWisata');
}]);

Route::get('/pemesananMakanan', function () {
    return view('pemesananMakanan');
});


// === Makanan route

Route::get('/miekocok', function () {
    return view('miekocok');
});

Route::get('/batagor', function () {
    return view('batagor');
});

Route::get('/karedok', function () {
    return view('karedok');
});

Route::get('/nasitutug', function () {
    return view('nasitutug');
});

Route::get('/lotek', function () {
    return view('lotek');
});

Route::get('/tahususubandung', function () {
    return view('tahususubandung');
});

Route::get('/colenak', function () {
    return view('colenak');
});



