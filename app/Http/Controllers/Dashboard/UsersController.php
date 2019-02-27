<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Calendar;
use App\Models\Users;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = Users::all();
        return view('dashboard.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('dashboard.users.create');
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

        /*$start_date = $input['start'];
        $end_date = $input['end'];

        $input['start'] = Carbon::parse($start_date)->format('Y-m-d');
        $input['end'] = Carbon::parse($end_date)->format('Y-m-d');*/

        $this->validate($request, [
            'fullname'                      =>  'required|min:3',
            'email'                         =>  'required|email|unique:users',
            'phone'                         =>  'required|min:10',
            'address'                       =>  'required',
            'password'                      =>  'required|min:6',
            'password_confirmation'         =>  'confirmed',
        ],[],[
            'fullname'                      =>  'Name',
            'email'                         =>  'Email',
            'phone'                         =>  'Phone',
            'address'                       =>  'Address',
            'password'                      =>  'Password',
            'password_confirmation'         =>  'confirmed',
        ]);

        $input['password'] = bcrypt($request->password);

        //Upload and insert images

        $user = Users::create($input);

        Session::flash('create',   $user->fullname . ' Has Been Created Successfully');
        return redirect('management/users');

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

        $user = Users::find($id);

        return view('dashboard.users.edit', compact('user'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     */

    public function update(Request $request, $id)
    {

        $user = Users::find($id);

        $input = $request->all();

        /*$start_date = $input['start'];
        $end_date = $input['end'];

        $input['start'] = Carbon::parse($start_date)->format('Y-m-d');
        $input['end'] = Carbon::parse($end_date)->format('Y-m-d');*/

        $this->validate($request, [
            'fullname'                      =>  'required|min:3',
            'email'                         =>  'required|email|unique:users,UID,' . $id . ',UID',
            'phone'                         =>  'required|min:10',
            'address'                       =>  'required',
            'password'                      =>  'required|min:6',
            'password_confirmation'         =>  'confirmed',
        ],[],[
            'fullname'                      =>  'Name',
            'email'                         =>  'Email',
            'phone'                         =>  'Phone',
            'address'                       =>  'Address',
            'password'                      =>  'Password',
            'password_confirmation'         =>  'confirmed',
        ]);

        //Upload and insert images

        $user->update($input);

        Session::flash('update',   $user->fullname . ' Has Been Updated Successfully');
        return redirect('management/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Users::find($id);

        $user->delete();

        Session::flash('delete',   $user->fullname . ' Event Has Been Deleted Successfully');

        return redirect('management/users');
    }
}
