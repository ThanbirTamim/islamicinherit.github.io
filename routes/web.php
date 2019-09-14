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

Route::get('/','CalculationController@index');
Route::get('/male','CalculationController@male');
Route::post('/male','CalculationController@malecalculation');
Route::get('/female','CalculationController@female');
Route::post('/female','CalculationController@femalecalculation');
Route::get('/show','CalculationController@show');
Route::get('/rule','CalculationController@rules');
Route::get('/communication','CalculationController@communication');
