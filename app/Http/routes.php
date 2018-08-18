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

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

//submitting data from contact page to database
Route::post('/contact/submit', 'msgControl@submit')-> name('msg');

//retriving all messages from database in messages pages for admins
Route::get('/message', 'msgControl@getMsg');