<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function handleImage(Request $request)
    {
        $request->validate([
            'image' => ['required', 'min:200', 'max:500', 'mimes:png,jpg,gif']
        ]);
        dd($request->file('image'));
    }
}
