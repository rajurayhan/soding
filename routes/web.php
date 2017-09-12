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

Auth::routes();

Route::get('/tasks', 'HomeController@index')->name('home');

Route::get('/task/add', 'HomeController@addTask')->name('addTask');
Route::post('/task/add', 'HomeController@postTask')->name('postTask');

Route::get('/task/edit/{id}', 'HomeController@editTask')->name('editTask');
Route::post('/task/edit/{id}', 'HomeController@updateTask')->name('updateTask');

Route::get('/task/delete/{id}', 'HomeController@deleteTask')->name('deleteTask');
