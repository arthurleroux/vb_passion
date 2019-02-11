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

Route::get('/', function() {
    return view('home');
})->name('home');

Route::resource('/car', 'CarController');

Route::get('/rallye_des_anglaises', function() {
    return view('statics.rallye_anglaises');
})->name('rallye_anglaises');

Route::get('/rallye_carte', function() {
    return view('statics.rallye_carte');
})->name('rallye_carte');

Route::get('/evenements', function() {
    return view('statics.evenements');
})->name('evenements');

Route::get('/partenaires', function() {
    return view('statics.partenaires');
})->name('partenaires');

Route::get('/galerie', function() {
    return view('statics.galerie');
})->name('galerie');

Route::get('/contact', function() {
    return view('statics.contact');
})->name('contact');