<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\maincontroller;
use Illuminate\Support\Facades\Route;

    //homepage

Route::get('/', [categorycontroller::class, 'index'])->name('home');

    //addcategory

Route::get('/product/addcategory', [CategoryController::class, 'create'])->name('category');


    //store catgory

Route::post('/product/addcategory', [CategoryController::class, 'store'])->name('store');
