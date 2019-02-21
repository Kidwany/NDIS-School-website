<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Careers extends Model  {

    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'careers';
    protected $primaryKey = 'ID';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ID', 'jobtitle', 'jobcode', 'expiredate', 'STID', 'desc'];

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
