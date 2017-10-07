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


// Home @also get proejects
Route::get('/', 'HomeController@index')->name('home');

// Auth
Auth::routes();


// Profile
Route::get('profile','UserController@index');

Route::post('feeds', 'UserController@postToFeed');

// Employee
Route::get('user','EmployeeController@index');


// Settings profile
Route::get('settings/profile','UserController@getSettings');

Route::post('settings/profile','UserController@postSettings');

Route::post('avatar','UserController@postAvatar');


// Chat 
Route::get('/profile/messages', 'ChatsController@index');

Route::get('messages', 'ChatsController@fetchMessages');

Route::post('messages', 'ChatsController@sendMessage');


//Project
Route::post('tasks','TaskController@postTasks');

Route::get('task/{id}','TaskController@getTask');

Route::post('edit/{id}','TaskController@editTask');