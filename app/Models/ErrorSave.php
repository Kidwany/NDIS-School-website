<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ErrorSave extends Model  {

    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'error_save';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Id', 'page_name', 'function_name', 'Is_android_Web', 'error_message', 'created_at', 'Created_Date', 'Update_Date'];

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
    protected $dates = ['created_at', 'Created_Date', 'Update_Date'];

}