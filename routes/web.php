<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\PostsController;


Route::get('/', function () { //callback function
    return view('welcome');
});

Route::get('/posts',[PostsController::class, 'index'] )-> name(name: 'posts.index');
Route::get('/posts/create', [PostsController::class, 'create'])->name(name: 'posts.create');
Route::POST('/posts', [PostsController::class, 'store'])->name(name: 'posts.store');


Route::get('/posts/{post}', [PostsController::class, 'show'])->name(name: 'posts.show');
