<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashBoard\CategoryController;
use App\Http\Controllers\DashBoard\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'dashboard'], function () {

    Route::resources([
        'post' => PostController::class,
        'category' => CategoryController::class,
    ])

});
