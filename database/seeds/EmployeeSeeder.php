<?php
// ricordarsi di portarsi dietro tutti i model che ci servono, soprattutto se dobbiamo creare delle relazioni
use App\Employee;
use App\Location;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    // in questo caso con il factory non usiamo la create, ma la make perchè prima di salvare i valori degli employee gli andiamo ad associare una location e poi tramite save buttiamo tutto sul db
    {
        factory(Employee::class, 50) -> make()
                                      -> each(function($emp){
                                        $loc = Location::inRandomOrder() ->first();
                                        $emp -> location() ->associate($loc);
                                        $emp -> save();
                                      });
    }
}
