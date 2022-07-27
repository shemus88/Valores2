<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker;

use Illuminate\Database\Seeder;

class CarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 1; $i <= 10; $i++) {
            DB::table('carreras')->insert([
                'nombre' => $faker->sentence(),
                'area' => $faker->name(),
                'fecha_creacion' => $faker->date(),
                'foto' => $faker->name(),
            ]);
        }
    }
}
