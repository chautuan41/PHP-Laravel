<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('home', [HomeController::class, 'index'])->name('user.home');
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('custom-login', [LoginController::class, 'customLogin'])->name('login.custom'); 
Route::get('register', [LoginController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [LoginController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [LoginController::class, 'signOut'])->name('signout');
Route::get('/shop', [HomeController::class, 'shop'])->name('user.shop');
Route::get('/products/{ID}', [HomeController::class, 'products'])->name('user.products');

Route::group(['middleware' => ['auth:web']], function () {
    Route::get('/cart/{ID}', [HomeController::class, 'cart'])->name('user.cart');
    Route::get('/profile/{ID}', [HomeController::class, 'profile'])->name('user.profile');
});