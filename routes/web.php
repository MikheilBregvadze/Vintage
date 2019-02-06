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

Route::get('/', 'PagesController@welcome');
Route::get('/cafe', 'PagesController@cafe');
Route::get('/cruz', 'PagesController@cruz');
Route::get('/scrambler', 'PagesController@scrambler');
Route::get('cafe/cart', 'PagesController@cart');
Route::get('cafe/shop/shop', 'PagesController@shop');

Route::resource('posts', 'PostsController');

Route::get('/products', 'ProductsController@shop');
// Route::get('shop', 'ProductsController@index')->name('shop');



// Route::get('/{any}', function(){
//    return view('welcome');
// })->where('any', '.*');

