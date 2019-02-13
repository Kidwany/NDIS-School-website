<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppMoredetails extends Model  {

    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $primaryKey = 'MRID';
    protected $table = 'app_moredetails';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['MRID', 'diagnostictestdate', 'parentmeeting', 'assessmentdate', 'diagnostictestresult', 'assessmentresult', 'APPID', 'created_at', 'updated_at'];

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