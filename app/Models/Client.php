<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'name',
        'email',
        'contact_person'
    ];
}
