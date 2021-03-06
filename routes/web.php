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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'ReportController@dashboard')->name('dashboard');
Route::get('/calculator', 'ReportController@calculator')->name('calculator');
Route::get('/all-report', 'ReportController@allReport')->name('reports');
Route::get('/report/{id}', 'ReportController@singleReport')->name('singleReport');
