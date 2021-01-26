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

Route::get('/', function () {
    return view('welcome');
});
Route::get('book','BookController@index')->name('book.index');
Route::get('book/create','BookController@create')->name('book.create');
Route::post('book/create','BookController@store')->name('book.store');
Route::get('book/edit/{id}','BookController@edit')->name('book.edit');
Route::put('book/edit/{id}','BookController@update')->name('book.update');
Route::delete('book/delete/{id}','BookController@delete')->name('book.delete');