<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function applications()
    {
        return view('dashboard.applications.application');
    }


    public function applicationDetails()
    {
        return view('dashboard.applications.applicationDetails');
    }
}

















