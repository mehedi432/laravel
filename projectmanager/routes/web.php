<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('/project','ProjectController');

Route::resource('/module','ModuleController');



Route::resource('/member','MemberController');

Route::resource('/project_member','ProjectMemberController');


Route::resource('/message','MessageController');

Route::resource('/project_task','ProjectTaskController');

Route::resource('/attendance','AttendanceController');
Route::resource('/assignments','AssignmentController');