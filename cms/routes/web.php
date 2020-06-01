<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/category', 'CategoryController');
    Route::resource('/tags', 'TagController');

    Route::resource('/post', 'PostController');
    Route::get('trashed-post', 'PostController@trashed')->name('trashed-post.index');
    Route::put('restore-post/{post}', 'PostController@restore')->name('restore-posts');
});
