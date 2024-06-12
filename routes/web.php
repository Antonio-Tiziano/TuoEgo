<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'Welcome'])->name('home');

Route::get('/profil', [PublicController::class, 'Profil'])->name('profil');

Route::get('/add-product', [PublicController::class, 'AddProduct'])->name('add.product');

Route::get('/show-product', [ProductController::class, 'ShowProduct'])->name('show.product');
