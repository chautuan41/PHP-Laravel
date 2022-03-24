<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
use App\Http\Controllers\HomeController;
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

Route::group(['middleware' => ['auth:web']], function () {
    
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/shop', [HomeController::class, 'shop'])->name('shop');
    Route::get('/products/{ID}', [HomeController::class, 'products'])->name('products');
    Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
    Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
});