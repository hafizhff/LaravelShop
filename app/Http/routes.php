<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
Route::resource('shop', 'tb_barangController');
Route::resource('customer', 'customer');
Route::resource('vendor', 'vendor');
Route::resource('penerimaan', 'penerimaan');
Route::resource('harga', 'harga');

Route::get('search/autocomplete', 'SearchController@autocomplete');
Route::get('search/databarang', 'SearchController@databarang');

Route::get('shop/delete/{id}', [
    'as' => 'profile', 'uses' => 'tb_barangController@delete'
]);


Route::get('customer/delete/{id}', [
    'as' => 'profile', 'uses' => 'customer@delete'
]);

Route::get('vendor/delete/{id}', [
    'as' => 'profile', 'uses' => 'vendor@delete'
]);