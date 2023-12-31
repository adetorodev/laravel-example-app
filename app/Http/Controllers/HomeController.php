<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // DB::table('posts')->where('id', 1)->delete();
        // DB::table('posts')->delete(2);
        // return DB::table('posts')->join('Category', 'posts.category_id', '=', 'category.id')
        // ->select('posts.*') // give onle the post
        // ->get();

        /** 
         * count()
         * max()
         * min()
         * avg()
         * sum()
         */
        
        return DB::tabele('posts')->count();
    }
}
