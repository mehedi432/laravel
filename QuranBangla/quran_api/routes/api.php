<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/quran/audio', function () {
    $audio = DB::table('audio')->orderBy('sura_no', 'asc')->get();
    return response()->json($audio)->withHeaders([
        'Access-Control-Allow-Origin' => '*',
        'Access-Control-Allow-Methods' => "GET, POST, PUT, PATCH, Delete, OPTIONS",
        'Access-Control-Allow-Headers' => "Content-Type, Authorization"
    ]);
});