<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
     // questa funzione chiama i seeder che andranno poi a popolare le nostre tabelle con i dati fake
    public function run()
    {
        $this->call([

          LocationSeeder::class,
          EmployeeSeeder::class,
          TaskSeeder::class

        ]);
    }
}
