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

$ministyRoutes = function(){
    Route::get('/', function() {
        return view('ministry.pages.index');
    });
};

$churchRoutes = function() {
    Route::get('/', function() {
        return view('church.pages.home');
    });

    Route::get('about', function() {
        return view('church.pages.about');
    });

    Route::get('serve', function() {
        return view('church.pages.serve');
    });
    Route::get('next-steps', function() {
        return view('church.pages.next-steps');
    });

    Route::get('/welcome', function () {
        return view('welcome');
    });
};

// Ministry Routes
Route::group(['domain' => 'dev.'.env('APP_DOMAIN', 'accs.com')], $ministyRoutes);

// Church Routes
Route::group(['domain' => 'dev.church.'.env('APP_DOMAIN', 'accs.com')], $churchRoutes);
Route::group(['domain' => 'church.'.env('APP_DOMAIN', 'accs.com')], $churchRoutes);