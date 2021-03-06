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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/','TodoController@index')->name('todos.index');
Route::get('/', function () {
    return redirect('todos');
});
Route::get('/todos','TodoController@index')->name('todos.index');
Route::get('/todos/create','TodoController@create')->name('todos.create');
Route::post('/todos','TodoController@store')->name('todos.store'); //making a post request
Route::get('/todos/{id}','TodoController@show')->name('todos.show');
Route::get('/todos/{id}/edit','TodoController@edit')->name('todos.edit');
Route::put('/todos/{id}','TodoController@update')->name('todos.update'); //making a put request
Route::delete('/todos/{id}','TodoController@destroy')->name('todos.destroy'); //making a delete request
