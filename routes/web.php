<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController;
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

Route::get('/post', [PostController::class, 'index']); // show post listing
Route::get('/post/create', [PostController::class, 'create']); // show post create form
Route::post('/post', [PostController::class, 'store']); // handle post request from the post create form shown in /post/create route and store post
Route::get('/post/{id}/edit', [PostController::class, 'edit']); // show post edit form
Route::put('/post/{id}', [PostController::class, 'update']); // handle post request from the post edit form shown in /post/create route and update post
Route::delete('/post/{id}/destroy', [PostController::class, 'destroy']); // delete post
