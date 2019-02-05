<?php

namespace App\Http\Controllers;

use App\Nationality;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    /**
     * This Function returns welcome page
     *
    */
    public function welcome()
    {
        return view('frontend.welcome');
    }

    /**
     * This Function returns welcome page
     *
     */

    public function about()
    {
        return view('frontend.about-us');
    }


    /**
     * This Function returns Contact page
     *
     */
    public function contact()
    {
        return view('frontend.contact');
    }


    /**
     * This Function returns Login page
     *
     */
    public function login()
    {
        return view('frontend.login');
    }


    /**
     * This Function returns Login page
     *
     */
    public function blog()
    {
        return view('frontend.blog');
    }

    /**
     * This Function returns Admission page
     *
     */
    public function admission_form()
    {
       //$national = Nationality::all();
        return view('frontend.admission');
    }

    public function feesGuide()
    {
        return view('frontend.fees-guide');
    }
}
