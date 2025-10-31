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
Route::GET('/posts/{post}/edit',[PostsController::class, 'edit'])->name(name: 'posts.edit');
Route::get('/posts/{post}', [PostsController::class, 'show'])->name(name: 'posts.show');
Route::PUT('/posts/{post}',  [PostsController::class, 'update'])->name(name:'posts.update');
Route::DELETE('/posts/{post}', [PostsController::class, 'destroy'])->name(name: 'posts.destroy');


/**
 *##two operations on database
 * 1-structure change for database(create table, edit colum, remove column) -> deal with db sturcture
 * 2- operations on database(insert record, edit record, delete recor)
 */