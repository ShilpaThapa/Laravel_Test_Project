<?php

use App\Http\Controllers\Front\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PageController::class,'home'])->name('homepage');
Route::get('/{slug}',[PageController::class,'index'])->name('front.pages');