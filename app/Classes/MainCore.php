<?php
/**
 * Created by PhpStorm.
 * User: khaled nabawy
 * Date: 1/30/2019
 * Time: 1:28 PM
 */
namespace App\Classes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

 class MainCore
{
    public static function Login($username, $password)
    {
        $data = DB::table('users')->where('username', '=', $username)
            ->where('password', '=', $password)
            ->get();
        //Auth::loginUsingId($data[0]->UID, true);
        Session::put('type',$data[0]->type);
        return $data;

    }
}