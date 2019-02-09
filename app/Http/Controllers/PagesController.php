<?php

namespace App\Http\Controllers;


use App\Models;
use Illuminate\Http\Request;
use App\Classes\MainCore;

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
        $nat = Models\Nationality::all();
        $rel = Models\Religion::all();
        $qal = Models\Qualification::all();
        $ocp = Models\Occupation::all();
        $pr = Models\Parentstatus::all();
        $gen = Models\Gender::all();
        $gr = Models\Grade::all();
        $int = ["nat" => $nat,"rel"=>$rel,"qal"=>$qal,"ocp"=>$ocp,"gen" => $gen,"gr"=>$gr,"pr"=>$pr];
        return view('frontend.admission', compact('int'));
    }


    /**
     * This Function returns Fees Guide page
     *
     */

    public function feesGuide()
    {
        return view('frontend.fees-guide');
    }


    /**
     * This Function returns Fees Guide page
     *
     */
    public function howToApply()
    {
        return view('frontend.how-to-apply');
    }


    /**
     * This Function returns Fees Documents Page
     *
     */
    public function requiredDocuments()
    {
        return view('frontend.required-documents');
    }

    /**
     * This Function returns Fees Documents Page
     *
     */
    public function academics()
    {
        return view('frontend.academics');
    }
    /**
     * This Function returns save applications form
     *
     */
    public function storeappform(Request $request)
    {
        //save students information
        //studentName - stu_grade - stureligion - stu_nationality - busaddress - year - month - day - stugender - stusection - stusecondlang
        //save father information
        //father_fullname - father_nationality - father_email - father_phone - fathercompany - fatherjob
        //
        return $request;
    }
    public function getdata(){

       return MainCore::get_all_data("Grade");
    }
}
