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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/podniz', function () {
    return view('podniz.index');
});

Route::get('/podniz', 'PodnizController@index');
Route::get('/podniz/create', 'PodnizController@create');
Route::get('/podniz/{podniz}', 'PodnizController@show');
Route::get('/podniz/{podniz}/edit', 'PodnizController@edit');
Route::post('/podniz', 'PodnizController@store');
