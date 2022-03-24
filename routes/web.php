<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/login', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/user/create', [UserController::class, 'create'])->name('user.create'); 
Route::post('/user', [UserController::class, 'store'])->name('user.store');
Route::get('/user/index', [UserController::class, 'index'])->name('user.index'); 
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit'); 
Route::put('/user/{id}/update', [UserController::class, 'update'])->name('user.update'); 
Route::delete('/user/{id}/destroy', [UserController::class, 'destroy'])->name('user.destroy');

Route::get('/post/create', [PostController::class, 'create'])->name('post.create'); 
Route::post('/post', [PostController::class, 'store'])->name('post.store'); 
Route::get('/post/{id}/index', [PostController::class, 'index'])->name('post.index'); 
Route::get('/post/{id}/edit', [PostController::class, 'edit'])->name('post.edit'); 
Route::put('/post/{id}/update', [PostController::class, 'update'])->name('post.update');
Route::delete('/post/{id}/destroy', [PostController::class, 'destroy'])->name('post.destroy');

Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create'); 
Route::post('/category', [CategoryController::class, 'store'])->name('category.store'); 
Route::get('/category/index', [CategoryController::class, 'index'])->name('category.index'); 
Route::get('/category/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit'); 
Route::put('/category/{id}/update', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/category/{id}/destroy', [CategoryController::class, 'destroy'])->name('category.destroy');

include('frontend.php');