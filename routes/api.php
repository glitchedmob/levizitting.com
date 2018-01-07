<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API router for your application. These
| router are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('blog', 'BlogController@index');
Route::get('blog/{post}', 'BlogController@single');

Route::get('projects', 'ProjectController@index');

Route::post('contact', 'ContactController@store');
