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


Route::get('/', function() {
    // $url = url('/about-us');
    $url = route('aboutpage');

    return "<a href='$url'>About Us</a>";
});

// DRY => Don't Repeat Yourself

Route::get('/about-new', function() {
    return "About Us Page";
})->name('aboutpage');

// require 'admin.php';

//


