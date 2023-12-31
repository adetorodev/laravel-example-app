<?php

namespace App\Http\Controllers;

use App\Models\MyPost;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        
        // return Post::where('status', 0)->get();
        return Post::where('status', 1)->orWhere('id', '=', 3)->get();
    }
}
