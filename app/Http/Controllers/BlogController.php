<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    function index() {
        $name = 'Sama Mohammed';
        $desc = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.';

        // return view('blog.index')->with('name', $name)->with('desc', $desc);
        // return view('blog.index', [
        //     'myname' => $name,
        //     'desc' => $desc
        // ]);

        $users = [
            [
                'id' => 1,
                'name' => 'Zina',
                'age' => 3,
                'mobile' => 54876
            ],
            [
                'id' => 2,
                'name' => 'Sama',
                'age' => 1,
                'mobile' => 9874654
            ],
            [
                'id' => 3,
                'name' => 'Mohammed',
                'age' => 29,
                'mobile' => 98665
            ],
            [
                'id' => 4,
                'name' => 'Lama',
                'age' => 5,
                'mobile' => 987777
            ]
        ];


        return view('blog.index', compact('name', 'desc', 'users'));
    }

    function about() {
        return view('blog.about');
    }

    function contact() {
        return view('blog.contact');
    }

    function post() {
        return view('blog.post');
    }

}

