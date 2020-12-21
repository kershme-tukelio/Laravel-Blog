<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\AuthController;

Route::get('/', [PostsController::class, 'index']);
Route::get('/posts/store', [PostsController::class, 'store'])->middleware('auth');
Route::get('/posts/{id}', [PostsController::class, 'show'])->name('posts.show');
Route::post('/posts', [PostsController::class, 'show'])->middleware('auth');
Route::post('/posts/{post}/comments', [CommentsController::class, 'store'])->name('comments.store')->middleware('auth', 'age.check');

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'getRegistrationForm']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::get('/login', [AuthController::class, 'getloginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');
});

Route::get('/profile', function () {
    return auth()->user();
});