<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

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
Route::get('/posts/{post:id}', [PostController::class, 'detail']);


Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index']);
Route::get('/category/create', [App\Http\Controllers\CategoryController::class, 'create']);
Route::post('/category/store', [CategoryController::class, 'store']);
Route::get('/category/{id}/edit', [CategoryController::class, 'edit']);
Route::put('/category/{id}', [CategoryController::class, 'update']);
Route::delete('/category/{id}', [CategoryController::class, 'destroy']);
