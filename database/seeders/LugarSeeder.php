<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lugar;
use Faker;

class LugarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $status = ['Listo', 'Libre','Ocupado', 'Solicitado'];

        for ($i=1; $i<=20; $i++) {
            $lugar = new Lugar;
            $lugar->nombre = $faker->name();
            $lugar->capacidad = $faker->numberBetween(100, 200);
            $lugar->status = $status[rand(0, 3)];
            $lugar->foto=$faker->name();
            $lugar->save();
        }
    }
}
