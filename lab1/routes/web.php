<?php

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
})->name('home');
use App\Http\Controllers\PostController;
Route::get('/posts',[PostController::class,'index'])->name('posts.home');

Route::get("/posts/create",[PostController::class,'create'])->name('post.create');
Route::get("/posts/{id}", [PostController::class,'show'])->name('post.show');
Route::get("/posts/edit/{id}", [PostController::class,'edit'])->name('post.edit');
Route::get("/posts/delete/{id}", [PostController::class,'destroy'])->name('post.delete');



