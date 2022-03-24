<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;

Route::group(['prefix' => '/'], function () {
    Route::get('login', [Admin\LoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [Admin\LoginController::class, 'login'])->name('admin.login.post');
    Route::get('register', [Admin\RegisterController::class, 'showRegisterForm'])->name('admin.register');
    Route::post('register', [Admin\RegisterController::class, 'register'])->name('admin.register.post');
    Route::get('logout', [Admin\LoginController::class, 'logout'])->name('admin.logout');
    Route::group(['middleware' => ['auth:admin']], function () {
        Route::get('/', function () {
            return view('admin.dashboard.dashboard');
        })->name('admin.dashboard');

        //accounts
        Route::group(['prefix' => 'accounts'], function() {
            Route::get('/',[Admin\AccountController::class, 'index'])->name('accounts');
            Route::get('create',[Admin\AccountController::class, 'create'])->name('accounts.create');
            Route::post('create',[Admin\AccountController::class, 'showCreate'])->name('accounts.create.post');
            Route::get('edit/{ID}',[Admin\AccountController::class, 'edit'])->name('accounts.edit');
            Route::post('edit/{ID}',[Admin\AccountController::class, 'showEdit'])->name('accounts.edit.post');
            Route::get('delete/{ID}',[Admin\AccountController::class, 'delete'])->name('accounts.delete');
        });

        //products
        Route::group(['prefix' => 'products'], function() {
            Route::get('/',[Admin\ProductController::class, 'index'])->name('products');
            Route::get('create',[Admin\ProductController::class, 'create'])->name('products.create');
            Route::post('create',[Admin\ProductController::class, 'showCreate'])->name('products.create.post');
            Route::get('edit/{ID}',[Admin\ProductController::class, 'edit'])->name('products.edit');
            Route::post('edit/{ID}',[Admin\ProductController::class, 'showEdit'])->name('products.edit.post');
            Route::get('delete/{ID}',[Admin\ProductController::class, 'delete'])->name('products.delete');
        });

        //product types
        Route::group(['prefix' => 'producttypes'], function() {
            Route::get('/',[Admin\ProductTypeController::class, 'index'])->name('producttypes');
            Route::get('create',[Admin\ProductTypeController::class, 'create'])->name('producttypes.create');
            Route::post('create',[Admin\ProductTypeController::class, 'showCreate'])->name('producttypes.create.post');
            Route::get('edit/{ID}',[Admin\ProductTypeController::class, 'edit'])->name('producttypes.edit');
            Route::post('edit/{ID}',[Admin\ProductTypeController::class, 'showEdit'])->name('producttypes.edit.post');
            Route::get('delete/{ID}',[Admin\ProductTypeController::class, 'delete'])->name('producttypes.delete');
        });

        //invoices
        Route::group(['prefix' => 'invoices'], function() {
            Route::get('/',[Admin\InvoiceController::class, 'index'])->name('invoices');
            Route::get('create',[Admin\InvoiceController::class, 'create'])->name('invoices.create');
            Route::post('create',[Admin\InvoiceController::class, 'showCreate'])->name('invoices.create.post');
            Route::get('edit/{ID}',[Admin\InvoiceController::class, 'edit'])->name('invoices.edit');
            Route::post('edit/{ID}',[Admin\InvoiceController::class, 'showEdit'])->name('invoices.edit.post');
            Route::get('delete/{ID}',[Admin\InvoiceController::class, 'delete'])->name('invoices.delete');
        });

        //invoice details
        Route::group(['prefix' => 'invoicedetails'], function() {
            Route::get('/{ID}',[Admin\InvoiceDetailController::class, 'index'])->name('invoicedetails');
            Route::get('create',[Admin\InvoiceDetailController::class, 'create'])->name('invoicedetails.create');
            Route::post('create',[Admin\InvoiceDetailController::class, 'showCreate'])->name('invoicedetails.create.post');
            Route::get('edit/{ID}',[Admin\InvoiceDetailController::class, 'edit'])->name('invoicedetails.edit');
            Route::post('edit/{ID}',[Admin\InvoiceDetailController::class, 'showEdit'])->name('invoicedetails.edit.post');
            Route::get('delete/{ID}',[Admin\InvoiceDetailController::class, 'delete'])->name('invoicedetails.delete');
        });
    });
    

    

});