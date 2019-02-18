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

    public static function get_all_data($table,$rel)
    {
        //find me here 
         $filedname = Schema::getColumnListing($table);
        $NamespacedModel = '\\App\Models\\' . $table;

        if($rel != "all"){
            $data = $NamespacedModel::with($rel)->get()->toArray();
            $result = array();
            foreach ($data as $key => $value) {
                if (is_array($value)) {

                }
                else {
                    $result[$key] = $value;
                }
            }
        }else{
            $data = $NamespacedModel::get()->toArray();
        }
        //$data = DB::table($table)->get()->toArray();
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

        return  json_encode($data);

    }


    public static function getTableColumns($table)
    {
        $filedname=  DB::table('gensetting')->select('filedname')->where('tbname', '=', $table)
            ->get()->toArray();
        $fileds = array_column($filedname,'filedname');
        $fstring = implode(',',$fileds);
        $final = explode(",",$fstring);
        return $final;



    }
    function Get_TwoDimarray_Return_OneUnique($array) {
        $result = array();
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $result = array_merge($result, Get_TwoDimarray_Return_OneUnique($value));
            }
            else {
                $result[$key] = $value;
            }
        }
        return array_unique($result);
    }
}