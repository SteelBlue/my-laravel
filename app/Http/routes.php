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

Route::get('foo', 'FooController@foo');

// Homepage
Route::get('/', 'PagesController@index');

// Contact
Route::get('contact', 'PagesController@contact');

// About Me
Route::get('about', 'PagesController@about');

// Experience
Route::get('experience', 'PagesController@experience');

// Education
Route::resource('education', 'EducationController');

// Tags
Route::get('tags/{tags}', 'TagsController@show');

// Blog
Route::resource('blog', 'ArticlesController');

// User Authentication
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);