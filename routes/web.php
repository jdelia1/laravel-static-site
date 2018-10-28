<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Index
Route::get('/', 'PagesController@getIndex')->name('pages.index');

// About Us
Route::get('/about', 'PagesController@getAbout')->name('pages.about');

// Contact Us
Route::get('/contact', 'ContactController@showForm')->name('contact.show');
Route::post('/contact/send', 'ContactController@sendEmail')->name('contact.send');