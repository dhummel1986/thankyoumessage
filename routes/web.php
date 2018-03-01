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

Route::get('/', 'PagesController@index')->name('index');

Route::get('/about','PagesController@about')->name('about');

Route::post('/contact', 'PagesController@store')->name('contact.store');
Route::get('/thanks/{name}','PagesController@thanks')->name('thanks');



Route::get('/contact', 'PagesController@contact')->name('contact');
Route::get('/SignIn', 'PagesController@SignIn')->name('SignIn');

Route::get('/Signup', 'PagesController@Signup')->name('Signup');


Route::get('/logout', 'PagesController@logout')->name('logout');

Route::get('/viewmessages', 'PagesController@viewmessages')->name('viewmessages');


