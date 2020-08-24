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
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('admin/login', 'Admin\LoginController@login');
Route::post('admin/doLogin', 'Admin\LoginController@login');
Route::get('admin/code', 'Admin\LoginController@code');

Route::get('user/index', 'UserController@index');
Route::get('user/add', 'UserController@add');
Route::get('user/edit/{id}', 'UserController@edit');
Route::get('user/delete/{id}', 'UserController@delete');
Route::post('user/save', 'UserController@save');
