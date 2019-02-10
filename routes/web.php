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

/* --- Return Welcome Page --- */
Route::get('/', 'PagesController@welcome');


/* --- Return About Page ---*/
Route::get('/about', 'PagesController@about');


/* --- Return Contact Page ---*/
Route::get('/contact', 'PagesController@contact');


/* --- Login Page ---*/
Route::get('/signin', 'PagesController@login');
Route::get('/logout', 'Auth\LoginController@logout');




/* --- Blog Page ---*/
Route::get('/blog', 'PagesController@blog');


/* --- Blog Page ---*/
Route::get('/admission', 'PagesController@admission_form');


/* --- Fees Guide Page ---*/
Route::get('/fees-guide', 'PagesController@feesGuide');


/* --- Blog Page ---*/
Route::get('/how-to-apply', 'PagesController@howToApply');


/* --- Required Documents Page ---*/
Route::get('/required-documents', 'PagesController@requiredDocuments');


/* --- Academics Page ---*/
Route::get('/academics', 'PagesController@academics');
Route::post('/store', 'PagesController@storeappform');
Route::get('/getdata/{Table}', 'PagesController@getview');
Route::get('/filldata/{Table}', 'PagesController@filldata');



/* -- Events Page --- */
Route::get('/events', 'PagesController@events');
Route::get('/event/details/{id}', 'PagesController@eventDetails');








/**
 * This List Containing The Admin Panel Routes
*/


Route::group(['namespace' => 'Dashboard'], function ()
{

    Route::get('/management', 'DashboardController@index');
    Route::get('management/applications', 'DashboardController@applications');
    Route::get('management/application-details', 'DashboardController@applicationDetails');

});


























