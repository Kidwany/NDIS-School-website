<?php

namespace App\Http\Controllers\Auth;

use App\Classes\MainCore;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/index';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
       $data = MainCore::Login($request->name, $request->password);
        if ($data[0]->type == 1) {
            return redirect('admin');

        } elseif($data[0]->type == 2) {
            return redirect('student');

        }elseif($data[0]->type == 3) {
            return redirect('teacher');

        }
    }
    public function showLoginForm(){
        return view('login');
    }

    public function logout(Request $request)
    {


            $this->guard()->logout();
            $request->session()->invalidate();
            return redirect('/');

    }
}
