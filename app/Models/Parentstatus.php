<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parentstatus extends Model  {

    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $primaryKey = 'PRSID';
    protected $table = 'parentstatus';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['PRSID', 'status'];

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