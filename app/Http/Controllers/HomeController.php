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
        // All data
        // return Post::all(); // get()

        // Single Data
        // return Post::find(9);
        // $post = Post::find(8);
        // return $post->title;

        // Single data or error
        // return $post = Post::findOrFail(121);

        $posts = Post::all();
        // return $post;
        foreach($posts as $post){
            echo $post->title;
        }

    }
}
