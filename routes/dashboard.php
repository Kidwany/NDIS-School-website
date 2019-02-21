<?php
/**
 * Created by PhpStorm.
 * User: Kidwany
 * Date: 2/18/2019
 * Time: 3:16 PM
 */

Route::group(['namespace' => 'Dashboard'], function ()
{

    /*--- Index of Dashboard ---*/
    Route::get('/management', 'DashboardController@index');

    /*--- Applications ---*/
    Route::resource('management/applications', 'ApplicationController');

    /*--- Application Details ---*/
    Route::get('management/application-details', 'DashboardController@applicationDetails');

    /*--- CareersController ---*/
    Route::get('management/careers', 'DashboardController@careers');

    /*--- Career Details ---*/
    Route::get('management/career/career-details', 'DashboardController@careerDetails');

    /*--- Create Career ---*/
    Route::get('management/careers/create', 'DashboardController@createCareer');

    /*--- Appliers For Career ---*/
    Route::get('management/careers/appliers', 'DashboardController@appliers');

    /*---  Applicants Details  ---*/
    Route::get('management/careers/appliers/applicant', 'DashboardController@applicantDetails');

    /*---- Careers ----*/
    Route::resource('management/careers', 'CareersController');

    /*---- Applicant ----*/
//    Route::resource('management/applicants', 'ApplicantController');

});
