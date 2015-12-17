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

// Contact
Route::get('contact', 'PagesController@contact');

// About Me
Route::get('about', 'PagesController@about');

// Experience
Route::get('experience', 'PagesController@experience');

// Blog
Route::resource('blog', 'ArticlesController');

// User Authentication
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('foo', ['middleware' => ['auth', 'manager'], function()
{
    return 'this route may only be used by managers';
}]);