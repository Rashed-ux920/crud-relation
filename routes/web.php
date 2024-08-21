<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\maincontroller;
use App\Http\Controllers\ProductController;
use App\Models\category;
use Illuminate\Support\Facades\Route;

    //homepage

Route::get('/', [categorycontroller::class, 'index'])->name('home');

    //addcategory

Route::get('/catogery/addcategory', [CategoryController::class, 'create'])->name('category');


    //store catgory

Route::post('/catogery/addcategory', [CategoryController::class, 'store'])->name('store');

    //productpage

Route::get('/cateogry/product', [ProductController::class, 'index'])->name('product');

    //addproduct

Route::get('/category/addproduct', [ProductController::class, 'create'])->name('addproduct');

    //stor product

Route::post('/category/addproduct', [ProductController::class, 'store'])->name('storpro');
