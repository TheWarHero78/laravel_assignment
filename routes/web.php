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
Route::get('/calci', function () {
    return view('calci');
});
Route::get('login', 'AuthenticationController@index')->name('login');
 Route::post('login', 'AuthenticationController@postLogin'); 

 //registration routes
 Route::get('registration', 'AuthenticationController@registration');
 Route::post('registration', 'AuthenticationController@postRegistration');
 Route::get('aboutus', 'AuthenticationController@abtus');
 //dashboard and logout route
Route::middleware('auth')->group(function(){
Route::get('dashboard', 'AuthenticationController@dashboard'); 
Route::get('logout', 'AuthenticationController@logout');
});
