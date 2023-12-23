<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $blogs = [
            [
                "title" => "Title One",
                "body" => "this is body text",
                "status" => 1,
            ],
            [
                "title" => "Title 2",
                "body" => "this is body text",
                "status" => 0,
            ],
            [
                "title" => "Title 3",
                "body" => "this is body text",
                "status" => 1,
            ],
            [
                "title" => "Title 4",
                "body" => "this is body text",
                "status" => 0,
            ]
            ];
        return view('home', compact('blogs'));
    }
}
