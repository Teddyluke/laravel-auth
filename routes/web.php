<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/emp-show/{id}', 'HomeController@show') ->name('emp-show');

Route::get('/emp-delete/{id}', 'UserController@delete') -> name('emp-delete');
