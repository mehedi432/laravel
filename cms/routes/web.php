<?php

use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/category', 'CategoryController');
    Route::resource('/tags', 'TagController');

    Route::resource('/post', 'PostController');
    Route::get('trashed-post', 'PostController@trashed')->name('trashed-post.index');
    Route::put('restore-post/{post}', 'PostController@restore')->name('restore-posts');
});


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/users', 'UserController@index')->name('users');
    Route::post('/users/{user}/make-admin', 'UserController@makeAdmin')->name('users.make-admin');
    Route::get('/users/edit-profile', 'UserController@edit')->name('users.edit-profile');
    Route::put('/users/update-profile', 'UserController@update')->name('users.update-profile');
});

// FRONT-END
Route::middleware(['client'])->group(function () {
    Route::get('/', 'WelcomeController@blog')->name('blog.index');
    Route::get('/blog/{id}', 'WelcomeController@show')->name('blog.show');
    Route::get('/business', 'WelcomeController@business')->name('business.index');

    Route::get('/categories/android', function () {
        $androidPosts = DB::table('posts')->where('category_id', 1)->get();        
        return view('front.categories.android')->with('posts', $androidPosts);
    })->name('categories.android');
    
    Route::get('/categories/linux', function () {
        $linuxPosts = DB::table('posts')->where('category_id', 2)->get();
        return view('front.categories.linux')->with('posts', $linuxPosts);
    })->name('categories.linux');

    Route::get('/categories/laravel', function () {
        $laravelPosts = DB::table('posts')->where('category_id', 3)->get();
        return view('front.categories.laravel')->with('posts', $laravelPosts);
    })->name('categories.laravel');

    Route::get('/categories/python', function () {
        $pythonPosts = DB::table('posts')->where('category_id', 4)->get();
        return view('front.categories.python')->with('posts', $pythonPosts);
    })->name('categories.python');

    Route::get('/hire-us', function () {
        return view('front.business.hire_us');
    })->name('business.hire-us');
});


