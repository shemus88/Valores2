<?php

namespace Database\Seeders;

use App\Models\Carrera;
use App\Models\User;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker;

class EstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $carreras = Carrera::all();
        $users = User::all();

        for ($i=1; $i <= 100; $i++) {
            DB::table('estudiantes')->insert([
                'matricula' => $faker->numerify('##########'),
                'generacion' => $faker->numberBetween(2018, 2021),
                'foto'=>$faker->name(),
                'user_id' => $users->unique()->random()->id,
                'carrera_id' => $carreras->random()->id,
            ]);
        }
    }
}
