<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\PagesController@index');

route::get('addUser','App\Http\Controllers\PagesController@agregar')->name('add');

route::post('/','App\Http\Controllers\PagesController@crear')->name('addUser1');

route::get('editUser/{id}','App\Http\Controllers\PagesController@editar')->name('adit');

route::put('editar/{id}','App\Http\Controllers\PagesController@update')->name('editUser1');

route::delete('eliminar/{id}', 'App\Http\Controllers\PagesController@eliminar')->name('eliminar');