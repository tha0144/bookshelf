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

Route::get('/', 'UsersController@show');

// アカウント作成
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

// ログイン
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

// 
Route::get('/about', function(){
    return view('about');
});

// 
Route::group(['middleware' => ['auth']], function(){
    Route::resource('books', 'BooksController');
    Route::resource('users', 'UsersController', ['only' => ['show']]);
});
//Route::get('search', 'BooksController@simpleSearch');
//Route::get('search', 'BooksController@detailedSearch');
//Route::get('books', 'BooksController@search')->name('books.search');

Route::group(['middleware' => ['auth'], Auth::id() == 1], function(){
    Route::resource('categories', 'CategoriesController');
});
