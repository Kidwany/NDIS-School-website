<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User  extends Authenticatable  {


    protected $primaryKey = 'UID';


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['UID', 'UserName', 'fullname', 'password', 'email', 'address', 'phone', 'type', 'Created_Date'];

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
    protected $dates = ['Created_Date'];

}
