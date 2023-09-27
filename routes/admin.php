<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('profile', [AdminController::class, 'profile'])->name('profile');
    Route::get('users', function() { return 'Admin users'; })->name('users');
    Route::get('orders', function() { return 'Admin orders'; })->name('orders');
    Route::get('products', function() { return 'Admin products'; })->name('products');
    Route::get('news', function() { return 'Admin news'; })->name('news');
});
