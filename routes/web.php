<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $posts = Post::published()->orderBy('id', 'desc')->get();
    // $posts = DB::table('posts')->get();

    return view('posts', compact('posts'));
});
Route::get('/posts/{id}', function ($id) {
    $post = Post::findOrFail($id);

    return view('post', compact('post'));
})->name('posts.single');