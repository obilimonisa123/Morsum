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

Route::get('/bookshelf','BookShelfController@index');
Route::get('/bookshelf/create','BookShelfController@create');
Route::post('/bookshelf','BookShelfController@store');
Route::get('/bookjson','BookShelfController@json');
Route::get('/bookshelf/edit/','BookShelfController@edit');
Route::post('/bookshelf/update/','BookShelfController@update');
Route::get('/bookshelf/destroy/','BookShelfController@destroy');


Route::get('/apidata' ,'MusicApiController@index');
Route::get('/bankholidays' ,'BankHolidayController@index');

