<?php

use Illuminate\Support\Facades\Route;

// Route::method('url', 'action');

// Route::get('url', 'action');
// Route::post('url', 'action');
// Route::put('url', 'action');
// Route::patch('url', 'action');
// Route::delete('url', 'action');
// Route::options('url', 'action');


// use , namespace

Route::get('/', function () {
    return 'Homepage';
});

Route::get('/about', function () {
    return 'About Us';
});

// php namespace resolver
//
