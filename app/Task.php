<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [

      'description',
      'deadline'

    ];

    public function employees()
   {
       return $this->belongsToMany('App\Employee');
   }
}
