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

// $ministryRoutes = function() {
//     Route::get('/', function() {
//         return view('ministry.pages.index');
//     })->name('ministry-home');
// };

$churchRoutes = function() {
    Route::get('/', function() {
        return view('church.pages.home');
    })->name('church-home');

    Route::get('about', function() {
        return view('church.pages.about');
    });

    Route::get('serve', function() {
        return view('church.pages.serve');
    });
    Route::get('next-steps', function() {
        return view('church.pages.next-steps');
    });

    Route::get('/events', function () {
        return view('church.pages.events');
    });

    Route::get('/kingdom-man', function () {
        return view('church.pages.mens-event');
    });

    Route::get('/kingdom-woman', function () {
        return view('church.pages.womens-event');
    });
};

// Ministry Routes
// Route::group(['domain' => 'www.'.env('APP_DOMAIN', 'accs.com')], $ministryRoutes);
// Route::group(['domain' => env('APP_DOMAIN', 'accs.com')], $ministryRoutes);
// Route::group(['domain' => 'dev.'.env('APP_DOMAIN', 'accs.com')], $ministryRoutes);

// // Church Routes
// Route::group(['domain' => 'church.'.env('APP_DOMAIN', 'accs.com')], $churchRoutes);
// Route::group(['domain' => 'dev.church.'.env('APP_DOMAIN', 'accs.com')], $churchRoutes);


// Church Routes
Route::group(['domain' => env('APP_DOMAIN', 'beaction.org')], $churchRoutes);
Route::group(['localhost'], $churchRoutes);
Route::group(['domain' => 'dev.'.env('APP_DOMAIN', 'accs.com')], $churchRoutes);