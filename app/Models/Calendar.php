<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    protected $fillable =
        [
            'title',
            'start',
            'end',
            'desc',
        ];


    protected $table = 'calendar';

    public $timestamps = false;

}
