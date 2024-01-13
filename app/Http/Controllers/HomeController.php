<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Category;
use App\Models\MyPost;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use File;

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

        // Post::withTrashed()->find(2)->restore();
        // Post::withTrashed()->find(2)->forceDelete();

        // dd('success');

        // $addresses = Address::all();

        // return view('home', compact('addresses'));

        // $categories = Category::find(4)->posts;

        // return view('home', compact('categories'));
        // $post = Post::first(1);
        // $post = Post::all(1);
        // $tag = Tag::first(1);

        // $post->tags()->attach($tag);
        // $post->tags()->attach([2,3,4]);
        // Storage::delete('/images/image_1.jpg');
        // File::delete(storage_path('/app/public/images/'))
        unlink(storage_path('/app/public/images/'))

        // Storage::disk('public')->delete('/images/image_1.jpg');

        return view('home');

    }
}
