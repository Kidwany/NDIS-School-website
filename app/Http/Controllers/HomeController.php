<?php
/**
 * Created by PhpStorm.
 * User: khaled nabawy
 * Date: 1/28/2019
 * Time: 11:55 AM
 */

namespace App\Http\Controllers;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Classes\MainCore;

class HomeController extends Controller
{
    public function index()
    {
       
        return view('welcome');
    }
    public function Admin(){
        return view('admin');
    }
    public function Student(){
        return view('student');
    }
    public function Teacher(){
        return view('teacher');
    }
}