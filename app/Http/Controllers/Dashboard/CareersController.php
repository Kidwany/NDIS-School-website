<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Applicants;
use App\Models\Careers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CareersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $careers = Careers::all();
        return view('dashboard.careers.index', compact('careers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.careers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $expire_date = $input['expiredate'];

        $input['expiredate'] = Carbon::parse($expire_date)->format('Y-m-d');

        $this->validate($request, [
            'jobtitle'      =>  'required|min:10',
            'expiredate'    =>  'required',
            'jobcode'       =>  'required|alpha_num|',
            'desc'          =>  'required|min:10',
        ],[],[
            'jobtitle'      =>  'Job Title',
            'expiredate'   =>  'Expire Date',
            'jobcode'       =>  'Job Code',
            'status'        =>  'Status',
            'desc'          =>  'Description',
        ]);

        //Upload and insert images

        $career = Careers::create($input);

        Session::flash('create',   $career->jobtitle . 'Has Been Published Successfully');
        return redirect('getdata/careers/all');
       /* try
        {



        }

        catch (\Exception $e)
        {
            Session::flash('exception', 'Can\'t Publish Position');
            return redirect('management/careers/create');
        }*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $career = Careers::find($id);
        return view('dashboard.careers.edit', compact('career'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();

        $expire_date = $input['expiredate'];

        $input['expiredate'] = Carbon::parse($expire_date)->format('Y-m-d');

        $this->validate($request, [
            'jobtitle'      =>  'required|min:10',
            'expiredate'    =>  'required',
            'jobcode'       =>  'required|alpha_num|',
            'desc'          =>  'required|min:10',
        ],[],[
            'jobtitle'      =>  'Job Title',
            'expiredate'   =>  'Expire Date',
            'jobcode'       =>  'Job Code',
            'status'        =>  'Status',
            'desc'          =>  'Description',
        ]);

        //Upload and insert images

        $career = Careers::find($id);
        $career->update($input);

        Session::flash('update',   $career->jobtitle . ' Job Has Been Updated Successfully');
        return redirect('management/careers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function destroy($id)
    {
        $career = Careers::find($id);

        $applicants = DB::table('applicant')->where('JOBID', $id);

        if (!empty($applicants))
        {
            $applicants->delete();
        }

        $career->delete();

        Session::flash('delete',   $career->jobtitle . ' Job Has Been Deleted Successfully');

        return redirect('management/careers');
    }
}
