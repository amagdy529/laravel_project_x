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

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');;
Route::post('/create', 'HomeController@store');

//Route::get('/home', 'PostController@getLoggedUserPosts');

Route::resource("posts","PostController");
Route::resource("comments","CommentController");

Route::get('profile','UserController@profile');
Route::post('profile','UserController@update_avatar');
