<?php
# @Author: Darryl Sullivan
# @Date:   2019-09-24T15:33:15+01:00
# @Last modified by:   Darryl Sullivan
# @Last modified time: 2019-10-01T15:42:38+01:00




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
Route::get('/todos','TodoController@index')->name('todos.index');
Route::get('/todos/create','TodoController@create')->name('todos.create');
Route::post('/todos', 'TodoController@store')->name('todos.store');
Route::get('/todos/{id}', 'TodoController@show')->name('todos.show');
Route::get('/todos/{id}/edit', 'TodoController@edit')->name('todos.edit');
Route::put('/todos/{id}', 'TodoController@update')->name('todos.update');
Route::delete('/todos/{id}', 'TodoController@destroy')->name('todos.destroy'); 
