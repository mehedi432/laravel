<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'TodosController@index');
Route::resource('todo', 'TodosController');
