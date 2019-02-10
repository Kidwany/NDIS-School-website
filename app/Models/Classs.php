<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classs extends Model  {

    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $primaryKey = 'CID';
    protected $table = 'classs';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['CID', 'Classname', 'Created_Date', 'Update_Date', 'GID'];

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