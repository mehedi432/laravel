<?php

use Illuminate\Support\Facades\Route;

// Dashboard
Route::get('/', 'DashboardController@index');

// Adding product
Route::resource('product', 'ProductController');
