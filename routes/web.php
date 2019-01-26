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
Route::get('/', 'UserController@index')->name('welcome');

Route::get('/help', 'UserController@help')->name('help');

Route::get('/comments', 'UserController@comments')->name('comments');

Route::get('/preregister', 'UserController@preregister')->name('preregister');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
