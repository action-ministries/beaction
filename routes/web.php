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

Route::get('/', function() {
    return view('pages.home');
});

Route::get('about', function() {
    return view('pages.about');
});

Route::get('serve', function() {
    return view('pages.serve');
});
Route::get('connect', function() {
    return view('pages.connect');
});

Route::get('/welcome', function () {
    return view('welcome');
});
