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
    protected $fillable = ['APPID', 'applicationfullname', 'applicationbusaddress', 'GID', 'stusection', 'stusecondlang', 'RLID', 'applicationdob', 'applicationage', 'appcode', 'isapproved', 'RegestrationDate', 'NID', 'GNID', 'PRSID'];

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

}