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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Rotas de Agenda
Route::get('/agenda/index', 'EventController@index')->name('agenda.index');
Route::get('/agenda/show', 'EventController@show')->name('agenda.show');
Route::post('/agenda/store', 'EventController@store')->name('agenda.store');
Route::post('/agenda/edit/{id}', 'EventController@edit')->name('agenda.edit');