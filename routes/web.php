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

Route::get('/', 'PageController@index');
Route::get('/blog', 'PostController@index');
Route::get('/blog/{post}', 'PostController@show');
Route::get('/projects', 'PageController@projects');
Route::get('/about', 'PageController@about');
Route::get('/contact', 'ContactController@index');
Route::post('/contact', 'ContactController@store');


Route::prefix('admin')
    ->group(function () {
        Auth::routes();
        Route::get("/", function() { return redirect("/admin/login"); });
        Route::middleware('auth')
            ->group(function () {
                Route::get("/dashboard", "Admin\PageController@index");
                Route::get("/logout", "Admin\PageController@logout");
                Route::get("/posts", "Admin\PostController@index");
                Route::get("/posts/create", "Admin\PostController@create");
                Route::post("/posts/create", "Admin\PostController@store");
                Route::get("/posts/{post}/edit", "Admin\PostController@edit");
                Route::post("/posts/{post}/edit", "Admin\PostController@update");
                Route::post("/posts/{post}/delete", "Admin\PostController@delete");
                Route::get("/projects", "Admin\ProjectController@index");
                Route::get("/projects/create", "Admin\ProjectController@create");
                Route::post("/projects/create", "Admin\ProjectController@store");
                Route::get("/projects/{project}/edit", "Admin\ProjectController@edit");
                Route::post("/projects/{project}/edit", "Admin\ProjectController@update");
                Route::post("/projects/{project}/delete", "Admin\ProjectController@delete");
                Route::get("/contacts", "Admin\ContactController@index");
                Route::get("/contacts/{contact}", "Admin\ContactController@show");
            });
    });