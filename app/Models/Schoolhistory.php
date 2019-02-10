<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schoolhistory extends Model  {

    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $primaryKey = 'SHID';
    protected $table = 'schoolhistory';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['SHID', 'PreviousSchool', 'Grade', 'Curriculum', 'SchoolLocation', 'YearsAttended', 'skippedagrade', ' learningsupport', 'acceleratedprogram', 'APPID'];

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