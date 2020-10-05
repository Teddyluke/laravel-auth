<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [

      'name',
      'surname',
      'location_id'

    ];

    // nel model valorizziamo le relazioni tra le tabelle. in questo caso Employee belongsto location perchè è una relazione 1 a molti. ogni emp ha una sola location. mentre nel tasks belongstomany perchè ogni emp può avere più tasks.
    public function location() {

      return $this -> belongsTo('App\Location');
    }

    public function tasks()
   {
       return $this-> belongsToMany('App\Task');
   }
}
