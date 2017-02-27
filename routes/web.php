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
 
//Default Welcome Routes and Auth Routes
// Route::get('/', function () {
//     return view('welcome');
// });

//Auth::routes();

// Route::get('/', 'HomeController@index');



// My Routes
Auth::routes();
Route::resource('/', 'HomeController');
Route::resource('event','EventController');
