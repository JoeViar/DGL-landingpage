<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavigationController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\BlogController;


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
Route::get('/blogDisp','blog')->name('blogDisp');

});
    


  
  



Route::controller(EmailController::class)->group(function(){
  Route::post('/distribuitorContact','emailDistrbution')->name('distribuitorContact');
    });
        
    


Route::get('/map','App\Http\Controllers\NavigationController@map')->name('map');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::resource('blog', BlogController::class);
});
