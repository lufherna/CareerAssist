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

// view to test out the index.blade.php
Route::get('/index', function () {
	return view('index');
});

// testing out the webdeveloper.blade.php
Route::get('/webdeveloper', function () {
	return view('webdeveloper');
});

// testing out the nursing.blade.php
/*Route::get('/nursing', function () {
	return view('nursing');
});*/

// view to test out the webdeveloper.blade.php
Route::get('/webdeveloper', 'HomeController@index2')->name('webdeveloper');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
