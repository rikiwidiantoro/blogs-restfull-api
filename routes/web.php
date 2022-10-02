<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
    return view('welcome');
});
Route::get('/home', function() {
    return view('home', [
        'title' => 'Home',
        'posts' => Post::all()
    ]);
});
// Route::get('/posts', function() {
//     return view('posts', [
//         'title' => 'Posts',
//         'posts' => Post::all()
//     ]);
// });
Route::get('/posts', [App\Http\Controllers\PostController::class, 'index']);
Route::get('/posts/create', [App\Http\Controllers\PostController::class, 'create']);
Route::post('/posts/store', [PostController::class, 'store']);
Route::get('/posts/{id}/edit', [PostController::class, 'edit']);
Route::put('/posts/{id}', [PostController::class, 'update']);
Route::delete('/posts/{id}', [PostController::class, 'destroy']);
