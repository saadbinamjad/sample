<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('/user', 'UserController');

Route::resource('/motion', 'MotionController');

Route::get('/motion/create', 'MotionController@create')->middleware('auth');



Route::resource('/round', 'RoundController');

Route::resource('/tournament', 'TournamentController');

Route::resource('/host', 'HostController');

Route::resource('/search', 'SearchController');

