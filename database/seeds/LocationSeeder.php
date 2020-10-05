<?php
// ricordarsi di portarsi dietro il model
use App\Location;
use Illuminate\Database\Seeder;
class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    // tramite factory andiamo a creare 10 location.
    {
        factory(Location::class, 10) -> create();
    }
}
