<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Homepage
Route::get('/', 'PageController@index');

// Contact Page
Route::get('contact', 'PageController@contact');

// About Page
Route::get('about', 'PageController@about');

// Articles Page
Route::get('blog', 'ArticleController@index');
Route::get('blog/create', 'ArticleController@create');
Route::get('blog/{id}', 'ArticleController@show');