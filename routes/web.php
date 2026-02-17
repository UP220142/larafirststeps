<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashBoard\CategoryController;
use App\Http\Controllers\DashBoard\PostController;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware([App\Http\Middleware\TestMiddleware::class])->group(function () 
{
    Route::get('/test/{id?}', function ($id= 10) {
    echo $id;
    });
});

    Route::group(['prefix' => 'dashboard'], function () {
        Route::resource('post', PostController::class);
        // 'category' => CategoryController::class,
        });

// Route::get('/test/{id}', function ($id) {
//     echo $id;
// });

// Route::controller(PostController::class)->group(function () {
//     Route::get('/post', 'index')->name('posts.index');
//     Route::get('/posts/create', 'create')->name('posts.create');
//     Route::post('/posts', 'store')->name('posts.store');
//     Route::get('/posts/{post}', 'show')->name('posts.show');
//     Route::get('/posts/{post}/edit', 'edit')->name('posts.edit');
//     Route::put('/posts/{post}', 'update')->name('posts.update');
//     Route::delete('/posts/{post}', 'destroy')->name('posts.destroy');
// });

// Route::group(['prefix' => 'dashboard'], function () {
//     Route::resources([
//         'post' => PostController::class,
//         'category' => CategoryController::class,
//     ])->only(['show']);
// });
