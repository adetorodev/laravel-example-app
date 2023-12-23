<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view('about');
});
// folder
Route::get('aboutf', function () {
    return view('about.index');
});

Route::get("contact", function() {
    return view('contact');
});

// Route::get("contact/{id}", function($id) {
//     return $id;
// });

// Route::get("contact/{id}", function($id) {
//     return $id;
// })->name('edit-contact');

// Route::get("home", function() {
//     return "<a href='".route('about')."'>About</a>";
// });

// Route::get("conta", function($id) {
//     return "<a href='".route('edit-contact', Sid)."'>Edit Contact</a>";
// });

// Route Grouping
// Route::prefix('customer')->group(function () {
//     Route::get('/', function () {
//         return "<h1>Customer List</h1>";
//     });

//     Route::get('/create', function () {
//         return "<h1>Customer Create</h1>";
//     });

//     Route::get('/show', function () {
//         return "<h1>Customer show</h1>";
//     });
// });

// Route Method
/**
 * GET
 * POST
 * PUT
 * PATCH
 * DELETE
 */

 // fallback route
Route::fallback(function(){
    return "Route not exist";
});



