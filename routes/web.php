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



Auth::routes();
Route::get('/', 'HomeController@index')->name('home');

//Diary関連の処理
Route::get('diary', 'DiaryController@index');
Route::post('diary', 'DiaryController@post');

Route::get('diary/find', 'DiaryController@find');
Route::post('diary/find', 'DiaryController@search');

Route::get('diary/add', 'DiaryController@add');
Route::post('diary/add', 'DiaryController@create');

Route::get('diary/edit', 'DiaryController@edit');
Route::post('diary/edit', 'DiaryController@update');

Route::get('diary/del', 'DiaryController@delete');
Route::post('diary/del', 'DiaryController@remove');


//pet関連の処理
Route::get('pet', 'PetController@index');
Route::post('pet', 'PetController@post');

Route::get('pet/find', 'PetController@find');
Route::post('pet/find', 'PetController@search');

Route::get('pet/add', 'PetController@add');
Route::post('pet/add', 'PetController@create');

Route::get('pet/edit', 'PetController@edit');
Route::post('pet/edit', 'PetController@update');

Route::get('pet/del', 'PetController@delete');
Route::post('pet/del', 'PetController@remove');
