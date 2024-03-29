<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model  {

    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $primaryKey = 'APPID';
    protected $table = 'application';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['APPID', 'applicationfullname', 'applicationbusaddress', 'GID', 'stusection', 'stusecondlang', 'RLID', 'applicationdob', 'applicationage', 'appcode', 'STID', 'RegestrationDate', 'NID', 'GNID', 'PRSID'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [];
    public  function grade(){
        return $this->belongsTo('App\Models\Grade','GID','GID');
    }
    public  function nat(){
        return $this->belongsTo('App\Models\Nationality','NID','NID');
    }
    public  function gender(){
        return $this->belongsTo('App\Models\Gender','GNID','GNID');
    }
    public  function status(){
        return $this->belongsTo('App\Models\Status','STID','STID');
    }
    public  function appinfo(){
        return $this->hasMany('App\Models\Additionalinfo','APPID','APPID');
    }
    public  function dataprotection(){
        return $this->hasMany('App\Models\Dataprotection','APPID','APPID');
    }
    public  function childpassport(){
        return $this->hasMany('App\Models\Childernpassport','APPID','APPID');
    }
    public  function emergency(){
        return $this->hasMany('App\Models\Emergency','APPID','APPID');
    }
    public  function schoolhistory(){
        return $this->hasMany('App\Models\Schoolhistory','APPID','APPID')->with('grade');
    }
    public  function parentapp(){
        return $this->hasMany('App\Models\Parentapp','APPID','APPID')->with('Parenttype','Nationality','jobs');
    }
    public  function familychild(){
        return $this->hasMany('App\Models\Familychild','APPID','APPID')->with('gender');
    }
    public  function parentstatus(){
        return $this->belongsTo('App\Models\Parentstatus','PRSID','PRSID');
    }
    public  function AppMoredetails(){
        return $this->belongsTo('App\Models\AppMoredetails','APPID','APPID');
    }


}