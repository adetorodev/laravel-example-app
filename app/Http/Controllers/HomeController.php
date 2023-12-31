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
        
        $post = Post::create([
            'title' => 'this is mass assign',
            'description'=>'This is description',
            'status'=> 1,
            'publish_at'=> date('Y-m-d'),
            'category_id'=> 3,
            'user_id' => 1
        ]);

        dd('success');

    }
}
