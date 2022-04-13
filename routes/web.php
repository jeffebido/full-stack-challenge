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
/*
Route::get('/', function () {
    return view('welcome');
});

Route::namespace(value: 'Site')->group(function(){

    Route::get(uri: '/', action: 'HomeController@index');
});
*/


Route::namespace('Site')->group(function(){

    Route::get( '/', 'HomeController')->name('site.home');

    Route::post('contato', 'ContactController@send')->name('site.contact.form');
    Route::post('appointment', 'AppointmentsController@send')->name('site.appointment.form');
});
