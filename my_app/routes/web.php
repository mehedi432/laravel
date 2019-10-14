<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    $tasks = DB::table('tasks')->get();
    return view('about', compact('tasks'));
});