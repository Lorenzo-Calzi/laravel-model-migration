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

/* Page Controller */
Route::get('/', 'PageController@index')->name('home');


/* Travel Controller */
Route::get('/travels', 'TravelController@index')->name('travels');






/* 
Travel:
 - id
 - destinazione
 - departure_date
 - return_date
 - costo
 */