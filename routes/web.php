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

Route::get('/', 'SiteController@index')->name('site');
Route::get('/product/{id}', 'SiteController@product')->name('site.product');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/add', 'HomeController@add')->name('add');
Route::post('/save', 'HomeController@save')->name('save');
Route::get('/edit/{id}', 'HomeController@edit')->name('edit');
Route::put('/update/{id}', 'HomeController@update')->name('update');
Route::get('/remove/{id}', 'HomeController@remove')->name('remove');

Route::post('/import', 'HomeController@import')->name('import');
