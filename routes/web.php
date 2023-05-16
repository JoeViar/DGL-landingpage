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

Route::get('/espera', function () {
    return view('welcome');
});
Route::post('contactForm', 'App\Http\Controllers\emailController@send')->name('contactForm');
// Route::get('/espera','App\Http\Controllers\NavigationController@index')->name('placeholder');
Route::get('/','App\Http\Controllers\NavigationController@index')->name('placeholder');
Route::get('/map','App\Http\Controllers\NavigationController@map')->name('map');