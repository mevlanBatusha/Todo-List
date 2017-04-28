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

Route::get('/', 'TasksController@index')->name('home');

Route::prefix('task')->group(function(){

    Route::post('/', 'TasksController@store');

    Route::post('/confirm/{task}', 'TasksController@confirm');

    Route::post('/unconfirm/{task}', 'TasksController@unConfirm');

    Route::delete('/{task}', 'TasksController@delete');
});
