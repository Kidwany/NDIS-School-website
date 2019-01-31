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
Route::get('/login', 'PagesController@login');


/* --- Blog Page ---*/
Route::get('/blog', 'PagesController@blog');

/* --- Blog Page ---*/
Route::get('/admission', 'PagesController@admission_form');



























