<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Additionalinfo extends Model
{


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'additionalinfo';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ADID', 'LNID', 'interests', 'Why', 'hearabout', 'APPID'];

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