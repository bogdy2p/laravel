<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |
 */
Route::get('/', 'SiteController@index');


Route::get('register', 'UsersController@create');
Route::get('login', 'SessionsController@create');
Route::resource('sessions', 'SessionsController');
Route::resource('users','UsersController');
Route::resource('posts','PostsController');

Route::group(array('before' => 'auth'), function(){
    Route::get('logout', 'SessionsController@destroy'); 
});

Route::get('admin',array('before' => ['auth','level'], 'uses' => 'AdminController@showAdminMenu'));
//Route::get('user',array('before' => ['auth'],'uses' => 'UserController@index'));
//Route::get('user/{user}/edit',array('before' => ['auth'],'uses' => 'UserController@edit'));
//Route::get('user/{user}/delete',array('before' => ['auth','level'],'uses' => 'UserController@delete'));