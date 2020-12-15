<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CommentsController;

Route::get('/', [PostsController::class, 'index']);
Route::get('/posts/store', [PostsController::class, 'store']);
Route::get('/posts/{id}', [PostsController::class, 'show'])->name('posts.show');

Route::post('/posts', [PostsController::class, 'show']);
Route::post('/posts/{post}/comments', [CommentsController::class, 'store'])->name('comments.store');