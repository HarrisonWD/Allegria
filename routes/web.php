<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/menu', 'MenuController@index');

Route::get('/reserve', function () {
    return view('reserve');
});

Route::get('/bar', function () {
    return view('bar');
});

Route::get('/events', function () {
    return view('events');
});

Route::get('/find', function () {
    return view('find');
});

Route::get('/offers', function () {
    return view('offers');
});

Route::get('/facebook', function () {
    return view('facebook');
});

Route::get('/contact', function () {
    return view('contact');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
