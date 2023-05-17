<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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

Route::get('/', [PostController::class, 'index'])->name('post.index');
Route::middleware('auth')->group(function () {
  Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
  Route::post('/post/create', [PostController::class, 'store'])->name('post.store');
  Route::delete('/post/{post}', [PostController::class, 'destroy'])->name('post.destroy');
  Route::get('/post/{post}', [PostController::class, 'edit'])->name('post.edit');
  Route::put('/post/{post}', [PostController::class, 'update'])->name('post.update');
});

Auth::routes();
