<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Applicants extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'applicant';
    protected $primaryKey = 'APLID';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['APLID', 'fullname', 'email', 'phone', 'JOBID', 'cvpath'];

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


    public function job()
    {
        return $this->belongsTo('App\Models\Careers', 'JOBID', 'ID');
    }

}
