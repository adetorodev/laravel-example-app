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
        // return DB::table('posts')->where('id', '>', 20)->where('id', '<', 27)->get();

        // return view('home', compact('blogs'));

        DB::table('posts')->insert([
            [
                'title' => 'This is test dATAT',
            'description' => 'This is dummy data that was insert using the insert type',
            'status' => 1,
            'publish_at' => date('Y-m-d'),
            'user_id' => 1
            ],
            [
                'title' => 'This is test dATAT',
            'description' => 'This is dummy data that was insert using the insert type',
            'status' => 1,
            'publish_at' => date('Y-m-d'),
            'user_id' => 1
            ]
        ]);

        dd('success');
    }
}
