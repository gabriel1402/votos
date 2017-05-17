<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'CandidatoController@show')->name('home');

Route::get('/votos', 'VotoController@create');

Route::post('/votos', 'VotoController@store');

Route::get('/candidatos', 'CandidatoController@create');

Route::post('/candidatos', 'CandidatoController@store');
