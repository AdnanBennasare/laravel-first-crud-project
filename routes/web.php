<?php


use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;



Route::get('/', function () {
    $posts = Post::where('user_id', auth()->id())->get();
    // $posts = auth()->user()->UsersPost()->latest()->get();

    return view('home', ['posts' => $posts]);
});

Route::post('/register', [UserController::class, 'register']);
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/login', [UserController::class, 'login']);


// ---Blog post related routes---

Route::post('/edit-post/{$post}', [PostController::class, 'EditPosts']);
// Route::post('/create-post', [PostController::class, 'createPost']);


