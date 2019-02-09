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
        $v = "<table border='1'>
                    <tr>
                        <td>test</td>
                    </tr>
            </table>";
        return $v;
        //$data = DB::table($table)->get();
        //return "<h1>".$filedname."</h1>";
    }

    public static function getTableColumns($table)
    {
        return Schema::getColumnListing($table);


    }
}