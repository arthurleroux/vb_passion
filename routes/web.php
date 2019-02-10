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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/rallye_des_anglaises', function() {
    return view('statics.rallye_anglaises');
});

Route::get('/rallye_carte', function() {
    return view('statics.rallye_carte');
});

Route::get('/evenements', function() {
    return view('statics.evenements');
});

Route::get('/partenaires', function() {
    return view('statics.partenaires');
});

Route::get('/gallerie', function() {
    return view('statics.gellerie');
});

Route::get('/contact', function() {
    return view('statics.contact');
});