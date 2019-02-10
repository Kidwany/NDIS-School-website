<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model  {

    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $primaryKey = 'UID';
    protected $table = 'users';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['UID', 'UserName', 'fullname', 'password', 'email', 'address', 'phone', 'created_at', 'remember_token', 'TID', 'updated_at'];

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
    protected $dates = ['created_at', 'updated_at'];

}