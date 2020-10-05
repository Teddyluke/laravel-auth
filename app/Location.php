<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [

      'city',
      'address'

    ];

    public function employees() {

    return $this -> hasMany('App\Employee');

  }
}
