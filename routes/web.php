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

Route::get('/addcat', 'CatController@getAdd');

Route::post('/addcat', 'CatController@addCat');

Route::get('/post/add', 'CatController@getPost');

Route::post('/post/add', 'CatController@addPost');