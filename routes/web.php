<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::GET('/', [PublicController::class, 'Welcome'])->name('home');

Route::GET('/profil', [PublicController::class, 'Profil'])->name('profil');

Route::GET('/add-product', [PublicController::class, 'AddProduct'])->name('add.product');

Route::GET('/show-product', [ProductController::class, 'ShowProduct'])->name('show.product');

Route::POST('/store', [ProductController::class, 'store'])->name('store.product');

/* Route::GET('/', [ProductController::class, ''])->name(''); */
