<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TimeLog extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'project_id',
        'start_time',
        'end_time',
        'description',
        'hours'
    ];

}
