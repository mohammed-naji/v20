<?php

use App\Http\Controllers\MainAppController;
use Illuminate\Support\Facades\Route;

// Route::get('/', [MainAppController::class, 'index'])->name('app.index');

Route::redirect('/', '/policy');
Route::view('/policy', 'policy');
// Route::get('/policy', function() {
//     return view('policy');
// });
