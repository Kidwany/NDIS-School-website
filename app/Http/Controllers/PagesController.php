<?php

namespace App\Http\Controllers;


use App\Models;
use DemeterChain\Main;
use Illuminate\Http\Request;
use App\Classes\MainCore;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Input;

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
        $int = ["nat" => $nat, "rel" => $rel, "qal" => $qal, "ocp" => $ocp, "gen" => $gen, "gr" => $gr, "pr" => $pr];
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
        //studentName - stu_grade - stureligion - stu_nationality -
        // busaddress - year - month - day - stugender - stusection -
        // stusecondlang

        $data = $request->all();
        $d = $data['year'] . '-' . $data['month'] . '-' . $data['day'];
        $from = Carbon::parse($d);
        $to = Carbon::parse(date('Y') . '-10-1');
        $diff = abs(strtotime($from) - strtotime($to));
        $years = floor($diff / (365 * 60 * 60 * 24));
        $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
        $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));
        $age = $years . " years, " . $months . " months, " . $days . " days";

        //['APPID', 'applicationfullname', 'applicationbusaddress',
        // 'GID', 'stusection', 'stusecondlang', 'RLID', 'applicationdob',
        // 'applicationage', 'appcode', 'isapproved', 'RegestrationDate',
        // 'NID', 'GNID', 'PRSID']
        $APPID = 0;
        $randnumber = rand('985', '999');
        $dt = Carbon::now();
        $app = new Models\Application();
        $app->applicationfullname = $request->input('applicationfullname');
        $app->applicationbusaddress = $request->input('applicationbusaddress');
        $app->GID = $request->input('GID');
        $app->stusection = $request->input('stusection');
        $app->stusecondlang = $request->input('stusecondlang');
        $app->RLID = $request->input('RLID');
        $app->applicationdob = $d;
        $app->applicationage = $age;
        $appcode = $randnumber . "_" . $dt->toDateString();
        $app->appcode = $appcode;
        $app->isapproved = 0;
        $app->RegestrationDate = $dt->toDateString();
        $app->NID = $request->input('NID');
        $app->GNID = $request->input('GNID');
        $app->PRSID = $request->input('PRSID');
        if($app->save()){
            $APPID = $app->APPID;
        }
        //save father information
        //father_fullname - father_nationality - father_email - father_phone - fathercompany - fatherjob
        //['PRAID', 'FullName', 'Phone', 'QID', 'Company',
        // 'email', 'OID', 'APPID', 'PRID', 'RLID']
        $parent = new Models\Parentapp();
        $parent->FullName = $request->input('father_fullname');
        $parent->Phone = $request->input('father_phone');
        $parent->Company = $request->input('fathercompany');
        $parent->email = $request->input('father_email');
        $parent->OID = $request->input('fatherjob');
        $parent->APPID = $APPID;
        $parent->NID = $request->input('father_nationality');
        $parent->PRID = 4;
        $parent->save();
        //mother_fullname - mother_nationality - mother_phone - mother_email - mother_company - mother_job
        //emergency_first_name - first_person_relation - emergency_first_mobile - emergency_first_home_no
        //child1_name - child1_age - child1_school - othergender
        //school1_name - curriculum1 - stu_grade2
        //child_hobbies - child_hobbies - prstatus
        //firstname - lastname - email - telephone


//        return $request;
    }

    public function getview($table)
    {
        $tablename = $table;
        $filedname = MainCore::getTableColumns($table);

        return view('master', compact('filedname', 'tablename'));
    }

    public function filldata()
    {
        $table = request('Table');
        return MainCore::get_all_data($table);
    }


}
