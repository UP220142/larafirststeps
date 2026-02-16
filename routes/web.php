<?php

use App\Http\Controllers\DashBoard\PostController;
use App\Http\Controllers\DashBoard\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('post', PostController::class);
Route::resource('category', CategoryController::class);
