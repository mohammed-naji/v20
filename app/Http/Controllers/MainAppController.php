<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainAppController extends Controller
{
    function index() {
        return view('test');
    }
}
