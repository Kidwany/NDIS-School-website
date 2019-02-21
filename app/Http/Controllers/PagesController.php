<?php

namespace App\Http\Controllers;


use App\Models\Contact;
use App\Models;
use DemeterChain\Main;
use Illuminate\Http\Request;
use App\Classes\MainCore;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

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
        return view('frontend.admission.admission', compact('int'));
    }

    public function applicationTrack()
    {
        return view('frontend.admission.track-application');
    }


    public function applicationStatus($id)
    {
        return view('frontend.admission.application-status');
    }


    /**
     * This Function returns Fees Guide page
     *
     */

    public function feesGuide()
    {
        return view('frontend.admission.fees-guide');
    }


    /**
     * This Function returns Fees Guide page
     *
     */
    public function howToApply()
    {
        return view('frontend.admission.how-to-apply');
    }


    /**
     * This Function returns Fees Documents Page
     *
     */
    public function requiredDocuments()
    {
        return view('frontend.admission.required-documents');
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

        $this->validate($request, [
            'GID' => 'required|int',

        ], [], [
            'GID' => 'test'
        ]);
        //save students information
        //studentName - stu_grade - stureligion - stu_nationality -
        //busaddress - year - month - day - stugender - stusection -
        //stusecondlang

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
        $app->isapproved = 1;
        $app->RegestrationDate = $dt->toDateString();
        $app->NID = $request->input('NID');
        $app->GNID = $request->input('GNID');
        $app->PRSID = $request->input('PRSID');
        if ($app->save()) {
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
        $parent->FullName = $request->input('mother_fullname');
        $parent->Phone = $request->input('mother_phone');
        $parent->Company = $request->input('mother_company');
        $parent->email = $request->input('mother_email');
        $parent->OID = $request->input('mother_job');
        $parent->APPID = $APPID;
        $parent->NID = $request->input('mother_nationality');
        $parent->PRID = 5;
        $parent->save();
        //emergency_first_name - first_person_relation - emergency_first_mobile - emergency_first_home_no
        //['EMID', 'Name', 'Relationtochild', 'HomeTel',
        // 'Mobile', 'Other', 'APPID'];
        $emrgncy = new Models\Emergency();
        $emrgncy->Name = $request->input('emergency_first_name');
        $emrgncy->Relationtochild = $request->input('first_person_relation');
        $emrgncy->HomeTel = $request->input('emergency_first_home_no');
        $emrgncy->Mobile = $request->input('emergency_first_mobile');
        $emrgncy->APPID = $APPID;
        $emrgncy->save();
        //child1_name - child1_age - child1_school - othergender
        //['FCID', 'familychildname', 'familychildage', 'familychildschool'
        //, 'APPID', 'GNID'];
        $child = new Models\Familychild();
        $child->familychildname = $request->input('child1_name');
        $child->familychildage = $request->input('child1_age');
        $child->familychildschool = $request->input('child1_school');
        $child->APPID = $APPID;
        $child->GNID = $request->input('othergender');
        $child->save();
        //school1_name - curriculum1 - stu_grade2
        //['SHID', 'PreviousSchool', 'Grade', 'Curriculum', 'SchoolLocation', 'YearsAttended',
        // 'skippedagrade', ' learningsupport',
        // 'acceleratedprogram', 'APPID'];
        $schoolhistroy = new Models\Schoolhistory();
        $schoolhistroy->PreviousSchool = $request->input('school1_name');
        $schoolhistroy->GID = $request->input('stu_grade2');
        $schoolhistroy->Curriculum = $request->input('curriculum1');
        $schoolhistroy->APPID = $APPID;
        $schoolhistroy->save();
        //child_hobbies - child_hobbies - prstatus
        //['ADID', 'LNID', 'interests',
        // 'Why', 'hearabout', 'APPID'];
        $addinfo = new Models\Additionalinfo();
        $addinfo->interests = $request->input('child_hobbies1');
        $addinfo->APPID = $APPID;
        $addinfo->save();
        //firstname - lastname - email - telephone
        //['DPID', 'Signature', 'Email', 'APPID'];
        $datapro = new Models\Dataprotection();
        $datapro->firstname = $request->input('firstname');
        $datapro->lastname = $request->input('lastname');
        $datapro->phone = $request->input('telephone');
        $datapro->Email = $request->input('email');
        $datapro->APPID = $APPID;
        $datapro->save();
        return redirect('thankyou')->with('appcode', $appcode);


    }

    public function thankyou()
    {
        return view('frontend.thankyou');
    }

    public function getview($table, $rel)
    {
        $tablename = $table;
        $filedname = MainCore::getTableColumns($table);
        $alldata = MainCore::get_all_data($table, $rel);
        return view('dashboard.master', compact('filedname', 'tablename', 'alldata'));
    }


    /**
     * This Function returns Events Page
     *
     */
    public function events()
    {
        return view('frontend.events.events');
    }


    /**
     * This Function returns Events Page
     *
     */
    public function eventDetails($id)
    {
        return view('frontend.events.eventDetails');
    }


    public function filldata()
    {
        //$table = request('Table');
        //return MainCore::get_all_data($table);
    }


    /**
     * This Function returns School life Page
     *
     */
    public function schoolLife()
    {
        return view('frontend.schoolLife');
    }


    /**
     * This Function returns School life Page
     *
     */
    public function calendar()
    {
        return view('frontend.about.calendar');
    }

    /**
     * This Function returns careers
     *
     */
    public function careers()
    {
        $careers = Models\Careers::all();
        return view('frontend.careers.careers', compact('careers'));
    }

    public function apply(Request $request)
    {
        //WHAT THE HELL


        $input = $request->all();
        $this->validate($request, [
            'fullname'  =>  'required|min:6|max:30',
            'email'     =>  'required|email|min:6|max:40',
            'phone'     =>  'required|alpha_num|min:9|max:12',
            'cvpath.*'    =>  'required|file|doc,docx,pdf',
        ],[],[
            'fullname'  =>  'Name',
            'email'     =>  'Email',
            'phone'     =>  'Phone',
            'cvpath'    => 'CV',
        ]);

        //Upload and insert images
        try
        {

            if ($file = $request->file('cvpath'))
            {
                $name =  time() . $file->getClientOriginalName();

                $file->move('dashboard/img/cv', $name);

                $path = 'dashboard/img/cv/' . $name;

                //$image = Images::create(['name' => $name, 'path' => $path]);

                $input['cvpath'] = $path;
            }

            $applicant = Models\Applicants::create($input);

            Session::flash('create', 'Thanks ' . $applicant->name . '.. Your Application has been sent successfully');
            return redirect('careers-apply');

        }

        catch (\Exception $e)
        {
            Session::flash('exception', 'Can\'t Upload CV to Server');
            return redirect('careers-apply');
        }

    }


    /**
     * This Function returns careers
     *
     */
    public function applyCareers()
    {
        //kmnbhjk
        $careers = Models\Careers::all();
        return view('frontend.careers.apply', compact('careers'));
    }



}
