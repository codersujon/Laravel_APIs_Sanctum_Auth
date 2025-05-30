<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
   public $timestamps = false;
   protected $fillable = [
        'client_id',
        'title',
        'description',
        'status',
        'deadline'
   ];
}
