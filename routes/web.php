<?php

Route::get('/', function () {
    return view('welcome');
});

Route::resource('groups','GroupController');
Route::resource('contacts','ContactController');
Route::post('search','SearchController@index');