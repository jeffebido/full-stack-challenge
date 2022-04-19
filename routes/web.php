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


Route::namespace('Site')->group(function(){

    Route::get( '/', 'HomeController@index')->name('site.home');


    Route::post('contato', 'ContactController@send')->name('site.contact.form');
    Route::post('appointment', 'AppointmentsController@send')->name('site.appointment.form');
});

Route::group(['prefix'=>'admin', 'as'=>'admin.', 'namespace'=>'Admin','middleware'=>'auth'], function(){

    Route::get( '/', 'DashboardController@index')->name('dashboard');
    Route::get( 'contacts', 'ContactsController@index')->name('contacts');
    Route::get( 'appointments', 'AppointmentsController@index')->name('appointments');
    Route::get( 'testimonials', 'TestimonialsController@index')->name('testimonials');
    Route::get( 'testimonials/add', 'TestimonialsController@add')->name('testimonials.add');
    Route::post( 'testimonials/add', 'TestimonialsController@addPost')->name('testimonials.add.post');
    Route::get( 'testimonials/update/{id}', 'TestimonialsController@update')->name('testimonials.update');
    Route::post( 'testimonials/update/{id}', 'TestimonialsController@updatePost')->name('testimonials.update.post');
    Route::get( 'testimonials/delete/{id}', 'TestimonialsController@delete')->name('testimonials.delete');
});

require __DIR__.'/auth.php';