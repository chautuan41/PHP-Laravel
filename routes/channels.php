<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

Route::get('/login', [App\Http\Controllers\LoginController::class, 'showLoginForm'])->name('user.login');
Route::post('login', [App\Http\Controllers\LoginController::class, 'login'])->name('user.login.post');
Route::get('/register', [App\Http\Controllers\RegisterController::class, 'showRegisterForm'])->name('user.register');
Route::post('register', [App\Http\Controllers\RegisterController::class, 'register'])->name('user.register.post');
Route::get('/home', [HomeController::class, 'index'])->name('user.home');