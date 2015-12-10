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
Route::get('/', 'PagesController@index');

// Contact Page
Route::get('contact', 'PagesController@contact');

// About Page
Route::get('about', 'PagesController@about');

// Blog Page
Route::get('blog', 'ArticlesController@index');
Route::get('blog/create', 'ArticlesController@create');
Route::get('blog/{id}', 'ArticlesController@show');
Route::post('blog', 'ArticlesController@store');
Route::get('articles/{id}/edit', 'ArticlesController@edit');
