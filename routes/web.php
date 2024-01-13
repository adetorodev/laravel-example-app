<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LoginController;
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

Route::get('/home', HomeController::class);

Route::post('/upload', [ImageController::class, 'handleImage'])->name('upload');

Route::get("/success", function(){
    return '<h1>Successfully uploaded</h1>';
})->name('success');

Route::get('/download', [ImageController::class, 'download'])->name('download');

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/login', [LoginController::class, 'handleLogin'])->name('login.summit');


 // fallback route
// Route::fallback(function(){
//     return "Route not exist";
// });



