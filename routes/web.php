<?php

// use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::post('getFriends', 'HomeController@getFriends');
Route::post('/session/create', 'SessionController@create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
