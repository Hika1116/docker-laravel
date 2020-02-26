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
use Illuminate\Support\Facades\Route;

// hello
Route::get('hello', 'HelloController@index');
Route::post('hello','HelloController@post');

// db
Route::get('select', 'DbOperation@index');
Route::get('select/add', 'DbOperation@add');
Route::post('select/add', 'DbOperation@create');
Route::get('select/edit', 'DbOperation@edit');
Route::post('select/edit', 'DbOperation@update');
Route::get('select/del', 'DbOperation@del');
Route::post('select/del', 'DbOperation@remove');

// person
Route::get('person', 'PersonController@index');
Route::get('person/add', 'PersonController@add');
Route::post('person/add', 'PersonController@create');
Route::get('person/edit', 'PersonController@edit');
Route::post('person/edit', 'PersonController@update');


//board
Route::get('board', 'BoardController@index');
Route::get('board/add', 'BoardController@add');
Route::post('board/add', 'BoardController@create');

