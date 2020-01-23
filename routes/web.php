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

Route::get('/', 'HomeController@show');
//Route:: get('/result', 'ResultController@show');
Route:: post('/result', 'ResultController@show');
Route:: get('/state', 'stateController@show');


//Route::get('csv_file', 'CsvFile@index');

//Route::get('csv_file/export', 'CsvFile@csv_export')->name('export');