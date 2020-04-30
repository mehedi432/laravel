<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('quran.index');
});

// Route::get("sura_arab", "QuranController@index")->name('sura_arab');
Route::resource("sura_arab", "SuraArabic");

Auth::routes();

Route::resource('sura', 'SuraController');
