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
Route::get('/blog', 'PageController@blog');
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
                Route::get("/posts/{post}/delete", "Admin\PostController@delete");
                Route::get("/projects", "Admin\PageController@projects");
                Route::get("/projects/new", "Admin\PageController@projectsNew");
                Route::get("/contacts", "Admin\ContactController@index");
                Route::get("/contacts/{contact}", "Admin\ContactController@show");
            });
    });