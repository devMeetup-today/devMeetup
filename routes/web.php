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

    $todo_list = [
        'set up user registration and login system',
        'create views dynamically',
        'choose a template + color scheme'
    ];

    return view('welcome', compact('todo_list'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
