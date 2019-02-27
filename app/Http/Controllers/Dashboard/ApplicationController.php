<?php

namespace App\Http\Controllers\Dashboard;

use App\Classes\MainCore;
use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\AppMoredetails;
use App\Models\Gender;
use App\Models\Grade;
use App\Models\Nationality;
use App\Models\Occupation;
use App\Models\Parentstatus;
use App\Models\Qualification;
use App\Models\Religion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $applications = Application::with('Grade', 'nat', 'gender', 'status')->get();
        return view('dashboard.applications.application', compact('applications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

          $findapp = AppMoredetails::where('APPID', '=', $request->APPID)->get();

        if (count($findapp) > 0) {
            $findapp[0]->diagnostictestdate = $request->diagnostictestdate;
            $findapp[0]->parentmeeting = $request->parentmeeting;
            $findapp[0]->assessmentdate = $request->assessmentdate;
            $findapp[0]->diagnostictestresult = $request->diagnostictestresult;
            $findapp[0]->assessmentresult = $request->assessmentresult;
            $findapp[0]->save();
             $application = Application::with('Grade', 'nat', 'gender', 'status','dataprotection')->where('APPID','=',trim($request->APPID))->get();
            if(!is_null($request->diagnostictestdate)){
                $application[0]->STID = 2;
                $application[0]->save();
                MainCore::sendmail($application[0]->dataprotection[0]->Email,$application[0]->appcode);
            }else{
                $application[0]->STID = 1;
                $application[0]->save();
            }
            if(!is_null($request->parentmeeting)){
                $application[0]->STID = 3;
                $application[0]->save();
                MainCore::sendmail($application[0]->dataprotection[0]->Email,$application[0]->appcode);
            }else{
                $application[0]->STID = 1;
                $application[0]->save();
            }
            if(!is_null($request->assessmentdate)){
                $application[0]->STID = 4;
                $application[0]->save();
                MainCore::sendmail($application[0]->dataprotection[0]->Email,$application[0]->appcode);
            }else{
                $application[0]->STID = 1;
                $application[0]->save();
            }
            return redirect('management/applications/'.$request->APPID.'/edit');
        }else{
            $findapp2 = new AppMoredetails();
            $findapp2->diagnostictestdate = $request->diagnostictestdate;
            $findapp2->parentmeeting = $request->parentmeeting;
            $findapp2->assessmentdate = $request->assessmentdate;
            $findapp2->diagnostictestresult = $request->diagnostictestresult;
            $findapp2->assessmentresult = $request->assessmentresult;
            $findapp2->APPID = $request->APPID;
            $findapp2->save();
            $application = Application::with('Grade', 'nat', 'gender', 'status','dataprotection')->where('APPID','=',trim($request->APPID))->get();
            if(!is_null($request->diagnostictestdate)){
                $application[0]->STID = 2;
                $application[0]->save();
                MainCore::sendmail($application[0]->dataprotection[0]->Email,$application[0]->appcode);
            }else{
                $application[0]->STID = 1;
                $application[0]->save();
            }
            if(!is_null($request->parentmeeting)){
                $application[0]->STID = 3;
                $application[0]->save();
                MainCore::sendmail($application[0]->dataprotection[0]->Email,$application[0]->appcode);
            }else{
                $application[0]->STID = 1;
                $application[0]->save();
            }
            if(!is_null($request->assessmentdate)){
                $application[0]->STID = 4;
                $application[0]->save();
                MainCore::sendmail($application[0]->dataprotection[0]->Email,$application[0]->appcode);
            }else{
                $application[0]->STID = 1;
                $application[0]->save();
            }
            return redirect('management/applications/'.$request->APPID.'/edit');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $grades = Grade::all();
        $nationality = Nationality::all();
        $religion = Religion::all();
        $qualification = Qualification::all();
        $occupation = Occupation::all();
        $parentstatus = Parentstatus::all();
        $gender = Gender::all();
        $application = Application::with('Grade', 'nat', 'gender', 'status', 'appinfo', 'dataprotection', 'childpassport', 'emergency', 'schoolhistory', 'parentapp', 'familychild', 'parentstatus', 'AppMoredetails')->find($id);
        return view('dashboard.applications.applicationDetails', compact('application', 'grades', 'nationality', 'religion', 'qualification', 'occupation', 'parentstatus', 'gender'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $appllication = Application::find($id);
        $appllication->appinfo()->delete();
        $appllication->dataprotection()->delete();
        $appllication->childpassport()->delete();
        $appllication->emergency()->delete();
        $appllication->schoolhistory()->delete();
        $appllication->parentapp()->delete();
        $appllication->familychild()->delete();
        $appllication->delete();
        Session::flash('delete', $appllication->applicationfullname . ' Application Has Been Deleted Successfully');

        return redirect('management/applications');
    }
}
