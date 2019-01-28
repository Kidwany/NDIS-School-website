<?php
/**
 * Created by PhpStorm.
 * User: khaled nabawy
 * Date: 1/28/2019
 * Time: 11:55 AM
 */

namespace App\Http\Controllers;



class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
}