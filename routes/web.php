<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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
    $posts = [] ;
    if (auth()->check()){
        $posts = auth()->user()->userPosts()->latest()->get();
    }
    
    return view('home',['posts'=>$posts]);
});
Route::post('/register', [UserController::class,'hello']);
Route::post('/logout', [UserController::class,'logout']);
Route::post('/login', [UserController::class,'login']);

// Blog post related routes 
Route::post('/create_post', [PostController::class,'createPost']);

