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
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Session;
use App\Models;

class MainCore
{
    public static function Login($username, $password)
    {
        $data = DB::table('users')->where('email', '=', $username)
            ->where('password', '=', Hash::make($password))
            ->get();

        if (count($data) >= 1) {
            Session::put('type', $data[0]->TID);
            Auth::login($data);
            return $data;
        } else {
            return false;
        }
    }

    public static function get_all_data($table)
    {
        $filedname = MainCore::getTableColumns($table);
        $data = DB::table($table)->get()->toArray();
        $newdata = array();

        for ($i = 0; $i < count($filedname); $i++) {
            $t = array_column($data, $filedname[$i]);
            array_push($newdata, $t);
        }
        $result = array();
        $action = array();
        foreach ($newdata as $sub_array) {
            foreach ($sub_array as $key => $value) {
                $result[$key][] = $value;
            }
        }

        return '{"data":' . json_encode($result) . '}';

    }


    public static function getTableColumns($table)
    {
        return Schema::getColumnListing($table);


    }
}
