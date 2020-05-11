<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('sura_names', function () {
    $sura_names = DB::table('suras')->get();
    return response()->json($sura_names)->withHeaders([
        'Access-Control-Allow-Origin' => "*",
        'Access-Control-Allow-Methods' => "GET, POST, PUT, PATCH, Delete, OPTIONS",
        'Access-Control-Allow-Headers' => "Content-Type, Authorization",
    ]);
});
