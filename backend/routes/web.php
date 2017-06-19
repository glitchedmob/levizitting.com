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
Route::get('/contact', 'PageController@contact');


Route::prefix('admin')
    ->group(function () {
        Auth::routes();
        Route::get("/", function() { return redirect("/admin/login"); });
        Route::middleware('auth')
            ->group(function () {
                Route::get("/dashboard", "AdminController@index");
                Route::get("/logout", "AdminController@logout");
                Route::get("/posts", "AdminController@posts");
                Route::get("/posts/new", "AdminController@postsNew");
                Route::get("/projects", "AdminController@projects");
                Route::get("/projects/new", "AdminController@projectsNew");
            });
    });




