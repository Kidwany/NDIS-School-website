<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Familychild extends Model  {

    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $primaryKey = 'FCID';
    protected $table = 'familychild';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['FCID', 'familychildname', 'familychildage', 'familychildschool', 'APPID', 'GNID'];

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
    public  function gender(){
        return $this->belongsTo('App\Models\Gender','GNID','GNID');
    }
}