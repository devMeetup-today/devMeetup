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

Route::get('/', 'MeetupController@index');

Route::get('/about', 'HomeController@showAboutPageAction');

Route::get('/meetup/create', 'MeetupController@create');

Route::get('/meetups', 'MeetupController@showMeetupListAction');

Route::get('/meetups/{meetup}', 'MeetupController@showMeetupAction');

Auth::routes();


/*
 * GET /meetups
 * GET /meetups/create
 * POST /meetups
 * GET /meetups/{id}/edit
 * GET /meetups/{id}
 * PATCH /meetups/{id}
 * DELETE /meetups/{id}
 */

