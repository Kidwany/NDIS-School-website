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
Route::post('/contact-form', 'PagesController@contactForm');


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


/* --- Required Documents Page ---*/
Route::get('/application-track', 'PagesController@applicationTrack');

/* --- Required Documents Page ---*/
Route::get('/application-track/{id}', 'PagesController@applicationStatus');

/* --- Academics Page ---*/
Route::get('/academics', 'PagesController@academics');
Route::post('/store', 'PagesController@storeappform');
Route::get('/thankyou', 'PagesController@thankyou');
Route::get('/getdata/{Table}/{rel}', 'PagesController@getview');
Route::get('/filldata/{Table}', 'PagesController@filldata');
Route::get('/checkrelation/{table}', 'PagesController@getrelation');



/* -- Events Page --- */
Route::get('/events', 'PagesController@events');
Route::get('/event/details/{id}', 'PagesController@eventDetails');


/* -- School Life Page --- */
Route::get('/school-life', 'PagesController@schoolLife');



/* -- School Calendar --- */
Route::get('/calendar', 'PagesController@calendar');


/* -- CareersController --- */
Route::get('/careers', 'PagesController@careers');


/* -- CareersController Apply--- */
Route::get('/careers-apply', 'PagesController@applyCareers');
Route::post('/career-apply', 'PagesController@apply');

/**
 * This List Containing The Admin Panel Routes
*/




























