<?php

use App\Core\Route;

Route::init();


Route::get('/', 'UserController@index');
Route::get('/user/{id}', 'UserController@show');