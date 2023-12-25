<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function handleLogin(Request $request)
    {
        $request->validate([
            // 'name' => 'required|alpha',
            'name' => ['required', 'alpha', 'min:6', 'max:10'],
            'email' => ['required', 'email', ],
            'password' => 'required',
        ],
    [
        'name.required' => 'The username field is required!',
        'name.alpha' => 'Username must contain letter only!'
    ]);
        return $request;
    }
}
