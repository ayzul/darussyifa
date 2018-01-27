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

Route::get('/' , 'PagesController@getWelcome');
Route::get('about' , 'PagesController@getAbout');
Route::get('visitor' , 'PagesController@getVisitor');
Route::get('references' , 'PagesController@getReferences');
Route::get('contact' , 'PagesController@getContact');
Route::get('posts', 'PostController@index');

Route::resource('posts', 'PostController');

Route::get('/home', 'HomeController@index')->name('home');
