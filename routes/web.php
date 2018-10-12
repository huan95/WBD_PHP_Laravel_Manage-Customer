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


use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'customers'], function () {

   Route::get('/list', 'CustomerController@list')->name('homeList');
   Route::get('{id}/delete', 'CustomerController@delete')->name('customerDelete');
   Route::get('/create', 'CustomerController@create')->name('customerCreate');
   Route::post('/create', 'CustomerController@store')->name('customerStore');
   Route::get('{id}/update', 'CustomerController@edit')->name('customerEdit');
   Route::post('{id}/update', 'CustomerController@update')->name('customerUpdate');
});