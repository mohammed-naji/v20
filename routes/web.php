<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\ExportDataController;

// Route::method('url', 'action');

// Route::get('url', 'action');
// Route::post('url', 'action');
// Route::put('url', 'action');
// Route::patch('url', 'action');
// Route::delete('url', 'action');
// Route::options('url', 'action');


// use , namespace

// Route::get('/', function () {
//     return 'Homepage';
// });

// Route::get('/about', function () {
//     return 'About Us';
// });

// Route::get('/contact-us', function () {
//     return 'Contact Us';
// });

// php namespace resolver
//

// Route::post('/', function() {
//     return 'homepage - post';
// });

// Route::put('/', function() {
//     return 'homepage - put';
// });

// Route::get('/', function() {
//     return 'homepage - get';
// });

// Route::get('/about', function() {
//     return 'About Us';
// });

// Route::get('user/{name}', function($name) {
//     return "Welcome " . $name;
// });

// Route::get('user/{name}/{age}', function($name, $age) {
//     return "Welcome " . $name . ", your age is " . $age;
// })->whereAlphaNumeric('name')->whereNumber('age');
// // ->where('name', '[a-mA-M]+');
// // ->whereAlpha('name');

// Route::get('sessions/{course}/{type?}', function($course, $type = 'live-online') {
//     return "Course: $course, Type: $type";
// });


// class Person {
//     public $name;
//     public $age;

//     function getName() {
//         echo $this->name;
//         return $this;
//     }

//     function getAge() {
//         echo $this->age;
//         return $this;
//     }
// }

// $p = new Person();

// $p->getName()->getAge();

// =>
// ->
// .
// ::


// Route::get('/', function() {
//     // $url = url('/about-us');
//     $url = route('aboutpage');

//     return "<a href='$url'>About Us</a>";
// });

// DRY => Don't Repeat Yourself

// Route::get('/about-new', function() {
//     return "About Us Page";
// })->name('aboutpage');

// require 'admin.php';

// index, about, services, courses, blog, contact
// Route::get('/', [MainController::class, 'index'])->name('main.index');
// Route::get('/about', [MainController::class, 'about_data'])->name('main.aboutpage');
// Route::get('/services', [MainController::class, 'services'])->name('main.services');
// Route::get('/courses/{id?}', [MainController::class, 'courses'])->name('main.courses');
// Route::get('/blog', [MainController::class, 'blog'])->name('main.blog');
// Route::get('/contact', [MainController::class, 'contact'])->name('main.contact');

// Route::get('orders', [PaymentController::class, 'orders'])->name('payment.orders');
// Route::get('checkout', [PaymentController::class, 'checkout'])->name('payment.checkout');
// Route::get('export', ExportDataController::class)->name('payment.export');

// 1. empty => without any method
// 2. invocable => has only one invoke method
// 3. resource => index, create, store, show, edit, updated, destroy
// 4. api resource => index, store, show, updated, destroy
// 5. singleton


// CRUD Application
// C => Create -> INSERT
// R => Read -> SELECT
// U => Update -> UPDATE
// D => Delete -> DELETE
//


Route::prefix('personal')->controller(PersonalController::class)->name('personal.')->group(function() {
    Route::get('/', 'index')->name('index');
    Route::get('/resume', 'resume')->name('resume');
    Route::get('/projects', 'projects')->name('projects');
    Route::get('/contact', 'contact')->name('contact');
});


Route::prefix('blog')->name('blog.')->group(function() {
    Route::get('/', [BlogController::class, 'index'])->name('index');
    Route::get('/about', [BlogController::class, 'about'])->name('about');
    Route::get('/contact', [BlogController::class, 'contact'])->name('contact');
    Route::get('/post', [BlogController::class, 'post'])->name('post');
});

//
