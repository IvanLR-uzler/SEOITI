<?php

use Illuminate\Routing\Router;
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

Route::get('/help', 'UserController@help')->name('help');
Route::get('/comments', 'UserController@comments')->name('comments');
Route::get('/preregister', 'UserController@preregister')->name('preregister');

// Authentication Routes...
Router::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Router::post('login', 'Auth\LoginController@login');
Router::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...

    Router::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Router::post('register', 'Auth\RegisterController@register');

// Password Reset Routes..
    Router::resetPassword();

// Email Verification Routes...
    Router::emailVerification();


Route::get('/home', 'HomeController@index')->name('home');



Route::middleware(['auth'])->group(function(){
    //Roles
    //Route::get('/register', 'HomeController@index')->name('home');
    Route::post('roles/store', 'RoleController@store')->name('roles.store')->middleware('permission:roles.create');
    Route::get('roles','RoleController@index')->name('roles.index')->middleware('permission:roles.index');
    Route::get('roles/create','RoleController@create')->name('roles.create')->middleware('permission:roles.create');
    Route::put('roles/{role}','RoleController@update')->name('roles.update')->middleware('permission:roles.edit');
    Route::get('roles/{role}','RoleController@show')->name('roles.show')->middleware('permission:roles.show');
    Route::delete('roles/{role}','RoleController@destroy')->name('roles.destroy')->middleware('permission:roles.distroy');
    Route::get('roles/{role}/edit','RoleController@edit')->name('roles.edit')->middleware('permission:roles.edit');
    //KnowledgementArea
    Route::post('knowledgementareas/store', 'KnowledgementAreaController@store')->name('knowledgementareas.store')->middleware('permission:knowledgementareas.create');
    Route::get('knowledgementareas','KnowledgementAreaController@index')->name('knowledgementareas.index')->middleware('permission:knowledgementareas.index');
    Route::get('knowledgementareas/create','KnowledgementAreaController@create')->name('knowledgementareas.create')->middleware('permission:knowledgementareas.create');
    Route::put('knowledgementareas/{knowledgementArea}','KnowledgementAreaController@update')->name('knowledgementareas.update')->middleware('permission:knowledgementareas.edit');
    Route::get('knowledgementareas/{knowledgementArea}','KnowledgementAreaController@show')->name('knowledgementareas.show')->middleware('permission:knowledgementareas.show');
    Route::delete('knowledgementareas/{knowledgementArea}','KnowledgementAreaController@destroy')->name('knowledgementareas.destroy')->middleware('permission:knowledgementareas.destroy');
    Route::get('knowledgementareas/{knowledgementArea}/edit','KnowledgementAreaController@edit')->name('knowledgementareas.edit')->middleware('permission:knowledgementareas.edit');

    //Users
    //Route::get('/register', 'UserController@index')->name('home');
    Route::post('users/store', 'UserController@store')->name('users.store')->middleware('permission:users.create');
    Route::get('users','UserController@index')->name('users.index')->middleware('permission:users.index');
    Route::get('users/create','UserController@create')->name('users.create')->middleware('permission:users.create');
    Route::put('users/{user}','UserController@update')->name('users.update')->middleware('permission:users.edit');
    Route::get('users/{user}','UserController@show')->name('users.show')->middleware('permission:users.show');
    Route::delete('users/{user}','UserController@destroy')->name('users.destroy')->middleware('permission:users.destroy');
    Route::get('users/{user}/edit','UserController@edit')->name('users.edit')->middleware('permission:users.edit');

    //Examns
    Route::post('examns/store', 'ExamnController@store')->name('examns.store')->middleware('permission:examns.create');
    Route::get('examns','ExamnController@index')->name('examns.index')->middleware('permission:examns.index');
    Route::get('examns/create','ExamnController@create')->name('examns.create')->middleware('permission:examns.create');
    Route::put('examns/{examn}','ExamnController@update')->name('examns.update')->middleware('permission:examns.edit');
    Route::get('examns/{examn}','ExamnController@show')->name('examns.show')->middleware('permission:examns.show');
    Route::delete('examns/{examn}','ExamnController@destroy')->name('examns.destroy')->middleware('permission:examns.destroy');
    Route::get('examns/{examn}/edit','ExamnController@edit')->name('examns.edit')->middleware('permission:examns.edit');
    
    //Question
    Route::post('questions/store', 'QuestionController@store')->name('questions.store')->middleware('permission:questions.create');
    Route::get('questions','QuestionController@index')->name('questions.index')->middleware('permission:questions.index');
    Route::get('questions/create','QuestionController@create')->name('questions.create')->middleware('permission:questions.create');
    Route::put('questions/{question}','QuestionController@update')->name('questions.update')->middleware('permission:questions.edit');
    Route::get('questions/{question}','QuestionController@show')->name('questions.show')->middleware('permission:questions.show');
    Route::delete('questions/{question}','QuestionController@destroy')->name('questions.destroy')->middleware('permission:questions.destroy');
    Route::get('questions/{question}/edit','QuestionController@edit')->name('questions.edit')->middleware('permission:questions.edit');
    //Aspirants
    Route::post('aspirants/store', 'AspirantController@store')->name('aspirants.store')->middleware('permission:aspirants.create');
    Route::get('aspirants','AspirantController@index')->name('aspirants.index')->middleware('permission:aspirants.index');
    Route::get('aspirants/create','AspirantController@create')->name('aspirants.create')->middleware('permission:aspirants.create');

    //Route::get('aspirants/register','AspirantController@create')->name('aspirants.create')->middleware('permission:aspirants.create');


    Route::put('aspirants/{aspirant}','AspirantController@update')->name('aspirants.update')->middleware('permission:aspirants.edit');
    Route::get('aspirants/{aspirant}','AspirantController@show')->name('aspirants.show')->middleware('permission:aspirants.show');
    Route::delete('aspirants/{aspirant}','AspirantController@destroy')->name('aspirants.destroy')->middleware('permission:aspirants.destroy');
    Route::get('aspirants/{aspirant}/edit','AspirantController@edit')->name('aspirants.edit')->middleware('permission:aspirants.edit');
    //Schools
    Route::post('schools/store', 'SchoolController@store')->name('schools.store')->middleware('permission:schools.create');
    Route::get('schools','SchoolController@index')->name('schools.index')->middleware('permission:schools.index');
    Route::get('schools/create','SchoolController@create')->name('schools.create')->middleware('permission:schools.create');
    Route::put('schools/{school}','SchoolController@update')->name('schools.update')->middleware('permission:schools.edit');
    Route::get('schools/{school}','SchoolController@show')->name('schools.show')->middleware('permission:schools.show');
    Route::delete('schools/{school}','SchoolController@destroy')->name('schools.destroy')->middleware('permission:schools.destroy');
    Route::get('schools/{school}/edit','SchoolController@edit')->name('schools.edit')->middleware('permission:schools.edit');
});
