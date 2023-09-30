<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function index() {
        return 'index page';
    }

    function about() {
        return 'about page';
    }

    function services() {
        return 'services page';
    }

    function courses($id = null) {
        return 'courses page ' . $id;
    }

    function blog() {
        return 'blog page';
    }

    function contact() {
        return 'contact page';
    }

}
