<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavigationController;
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

Route::controller(NavigationController::class)->group(function(){
Route::get('/','index')->name('index');
Route::get('/about_us','about_us')->name('about_us');
Route::get('/distributor','distributor')->name('distributor');
Route::get('/find_us','find_us')->name('find_us');
Route::get('/hr','hr')->name('hr');
Route::get('/blog','blog')->name('blog');
});
    




Route::post('contactForm', 'App\Http\Controllers\emailController@send')->name('contactForm');
Route::get('/map','App\Http\Controllers\NavigationController@map')->name('map');
