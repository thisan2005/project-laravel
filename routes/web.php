<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacts/create', function () {
    return view('create');
});

Route::get('/contacts', 'App\Http\Controllers\UserController@index'); 

Route::get('/contacts/{id}', 'App\Http\Controllers\UserController@show'); 

Route::post('/contacts', 'App\Http\Controllers\UserController@store'); 

Route::get('/contacts/{id}/edit', 'App\Http\Controllers\UserController@edit'); 

Route::post('/contacts/{id}/edit', 'App\Http\Controllers\UserController@update'); 

Route::delete('/contacts/{id}', 'App\Http\Controllers\UserController@destroy'); 
