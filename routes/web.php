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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/notes/create', 'NotesController@create')->name('notes.create');
Route::post('/notes/store', 'NotesController@store')->name('notes.store');
Route::get('/notes', 'NotesController@index')->name('notes');
Route::get('/notes/{task}','NotesController@show')->name('notes.show');
//Route::get('/notes', 'NotesController@index')->name('notes');

Route::get('/git/update', 'ContinuousIntegrationController@index')->name("updateSource");
Route::post('/git/update', 'ContinuousIntegrationController@index')->name("updateSource");
