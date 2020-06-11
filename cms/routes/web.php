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


Route::middleware(['auth', 'admin'])->group(function() {

    Route::get('/users', 'UserController@index')->name('users');
    Route::post('/users/{user}/make-admin', 'UserController@makeAdmin')->name('users.make-admin');
    Route::get('/users/edit-profile', 'UserController@edit')->name('users.edit-profile');
    Route::get('/users/{user}/update-profile', 'UserController@update')->name('users.update-profile');
});