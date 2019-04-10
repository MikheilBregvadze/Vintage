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

Route::get('/dashboard', function () {
    return view('');
});

Auth::routes();

Route::get('/cruz', 'CruzController@index')->name('cruz');
Route::get('/scrambler', 'ScramblerController@index')->name('cruz');
Route::get('/cafe', 'CafeController@index')->name('cruz');
Route::get('/cafe/shop', 'ShopController@index')->name('cruz');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
