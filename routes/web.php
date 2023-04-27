<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', [PostController::class, 'index'])->name('posts.index');
Route::get('/show/{id}', [PostController::class, 'show'])->name('posts.show');
Route::get('/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts',[PostController::class, 'store'])->name('posts.store');
Route::post('/posts/{id}/update', [PostController::class, 'update'])->name('posts.update');
Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');