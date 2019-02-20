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
Route::get('/about', 'PagesController@about');
Route::get('/about-ecosystem', 'PagesController@aboutecosystem');
Route::get('/how-to', 'PagesController@howto');
Route::get('/forum', 'PagesController@forum');
Route::get('/blogs', 'PagesController@blogs');
Route::get('/event-session', 'PagesController@eventsession');
Route::get('/faqs', 'PagesController@faqs');
Route::get('/schemes', 'PagesController@schemes');
Route::get('/templates', 'PagesController@templates');
Route::get('/live-session', 'PagesController@livesession');
Route::get('/tutorial', 'PagesController@tutorial');
