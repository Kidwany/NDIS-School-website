<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     *
     * This Function Return Index of dashboard
     *
    */
    public function index()
    {
        return view('dashboard.index');
    }

    /**
     *
     * This Function Return Applications page
     *
     */
    public function applications()
    {
        return view('dashboard.applications.application');
    }



    /**
     *
     * This Function Return Applications Details
     *
     */
    public function applicationDetails()
    {
        return view('dashboard.applications.applicationDetails');
    }



    /**
     *
     * This Function Return Career Details
     */
    public function careerDetails()
    {
        return view('dashboard.careers.career-details');
    }

    /**
     *
     * This Function Return Career Details
     */
    public function createCareer()
    {
        return view('dashboard.careers.create');
    }


    /**
     *
     * This Function Return Appliers
     */
    public function appliers()
    {
        return view('dashboard.careers.appliers');
    }


    /**
     *
     * This Function Return Applicant Details
     */
    public function applicantDetails()
    {
        return view('dashboard.careers.applicantDetails');
    }
}

















