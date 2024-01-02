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
        
        // $post = Post::create([
        //     'title' => 'this is mass assign',
        //     'description'=>'This is description',
        //     'status'=> 1,
        //     'publish_at'=> date('Y-m-d'),
        //     'category_id'=> 3,
        //     'user_id' => 1
        // ]);

        // $post = Post::find(4)->update([
        //     'title' => 'this is mass assign',
        //     'description'=>'This is description',
        // ]);

        // $post = Post::where('status', 1)->update([
        //     'status' => 0,
        // ]);
        // Post::find(3)->delete();
        // return Post::onlyTrashed()->get();

        Post::withTrashed()->find(3)->restore();

        dd('success');

    }
}
