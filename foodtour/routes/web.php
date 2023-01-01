<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
Route::get('login', [UserController::class, 'login'])->name('login.get');
Route::post('login', [UserController::class, 'loginUser'])->name('login.post');
Route::get('logout', [UserController::class, 'logout'])->name('logout.get');
route::post('/logout', [UserController::class, 'logoutUser']);

// ==================== Website Route ====================
Route::get('/', function () {
    return view('homeuser');
});

Route::get('/login', function () {
    return view('login');
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
    return view('packagesuser');
});

Route::get('/park&zoo', function () {
    return view('park&zoo');
});

Route::get('/book', function () {
    return view('book');
});