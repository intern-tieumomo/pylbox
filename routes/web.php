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

Route::group(['middleware' => 'locale'], function() {
    Route::get('change-language/{language}', 'HomeController@changeLanguage')->name('home.change-language');

    Route::group(['domain' => 'countday.'.parse_url(config('app.url'), PHP_URL_HOST)], function () {
        Route::get('/', function () {
            return "Redirecting to Countday... ";
        })->name('countday.home');
    });

    Route::get('/', function () {
        return view('home.home');
    })->name('home');
});
