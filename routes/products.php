<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Product\ProductController;

Route::prefix('products')
    ->middleware(['auth', 'web'])
    ->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('products.list');
    Route::get('/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/info/{id}', [ProductController::class, 'info'])->name('product.info');
    Route::get('/info/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('/info/{id}/update', [ProductController::class, 'update'])->name('product.update');
});
