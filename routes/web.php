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

Route::middleware('auth')->group(function(){ 
    Route::get('/todos','TodoController@index')->name('todo.index');

    Route::get('/todos/create','TodoController@create');

    Route::get('/todos/{id}/edit','TodoController@edit');

    Route::patch('/todos/{id}/update','TodoController@update')->name('id.update');

    Route::put('/todos/{id}/complete','TodoController@complete')->name('id.complete');

    Route::put('/todos/{id}/incomplete','TodoController@incomplete')->name('id.incomplete');

    Route::post('/todos/create','TodoController@store');

});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home','UserController@index');

Route::post('/upload',function (){
    request()->image->store('images','public');
    //dd(request()->image);
    return 'uploaded';

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
