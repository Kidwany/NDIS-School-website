<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Studentbus extends Model  {

    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'studentbus';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['SBID', 'UID', 'BID', 'Created_Date', 'Update_Date'];

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
    protected $dates = ['Created_Date', 'Update_Date'];

}