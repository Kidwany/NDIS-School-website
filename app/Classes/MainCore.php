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
        $data = DB::table('users')->where('email', '=', $username)
            ->where('password', '=', Hash::make($password))
            ->get();

        if(count($data) >= 1){
            Session::put('type',$data[0]->TID);
            Auth::login($data);
            return $data;
        }else{
            return false;
        }


    }
}