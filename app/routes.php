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


Route::get('login', 'SessionsController@create');

Route::resource('sessions', 'SessionsController');

Route::get('register', 'UserController@create');

Route::get('/', 'SiteController@index');


Route::group(array('before' => 'auth'), function(){
    
    
    
    Route::get('logout', 'SessionsController@destroy'); 
    
    Route::resource('user','UserController');
    
    Route::get('admin',array('before' => 'level', 'uses' => 'UserController@showAdminMenu'));
    
});