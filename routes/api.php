<?php

use Illuminate\Http\Request;

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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::get('/postsJson', 'PostController@indexJson');


Route::get('/posts', 'PostApiController@index');
Route::put('/createPost', 'PostApiController@store');
Route::post('/updatePost/{id}', 'PostApiController@update');
Route::delete('/deletePost/{id}', 'PostApiController@destroy');
Route::get('post/{id}', 'PostApiController@show');
