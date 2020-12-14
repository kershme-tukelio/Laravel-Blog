<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\PostsController;

Route::get('/', [PostsController::class, 'index']);
Route::get('/posts/create', [PostsController::class, 'create']);
Route::get('/posts/{id}', [PostsController::class, 'show'])->name('posts.single');

Route::post('/posts', [PostsController::class, 'store']);