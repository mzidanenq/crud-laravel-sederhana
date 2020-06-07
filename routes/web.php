<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'ProductController@index')->name('product.add');

Route::post('/product', 'ProductController@store')->name('product.store');

Route::get('/product', 'ProductController@view')->name('product.view');

Route::delete('/product/delete/{id}', 'ProductController@delete')->name('product.delete');

Route::patch('/product/{id}', 'ProductController@update')->name('product.update');

Route::get('/product/edit/{id}', 'ProductController@edit')->name('product.edit');