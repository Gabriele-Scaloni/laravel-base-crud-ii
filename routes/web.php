<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@home') -> name('home');
Route::get('/movies/show/{id}', 'HomeController@show') ->name('show');
Route::get('/movie/create', 'HomeController@create') ->name('create');

