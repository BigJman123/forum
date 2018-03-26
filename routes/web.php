<?php

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/threads', 'ThreadsController@index');
Route::get('/threads/{thread}', 'ThreadsController@show');