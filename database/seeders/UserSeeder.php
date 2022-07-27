<?php

namespace Database\Seeders;
use App\Models\Carrera;
use Illuminate\Database\Seeder;
use Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $roles = ['Admin', 'Estudiante', 'Tutor', 'Coordinador'];
        $sexos = ['Masculino', 'Femenino'];
        $status = ['Activo', 'Baja Temporal', 'Baja Definitiva'];
        $carreras = Carrera::all();

        for ($i = 1; $i <= 100; $i++) {
            $queRol =  $roles[rand(0, 3)];
            $queCarrera = $carreras->random()->id;

            $id = DB::table('users')->insertGetId([
                'name' => $faker->name(),
                'appaterno' => $faker->lastName(),
                'apmaterno' => $faker->lastName(),
                'email' => $faker->unique()->email(),
                'foto'=> $faker->name(),
                'password' => Hash::make('12341234'),
                'rol' => $queRol,
                'sexo' => $sexos[rand(0, 1)],
                'status' => $status[rand(0, 2)],
                'carrera_id' => $queCarrera,
            ]);

            if ($queRol == "Estudiante") {
                DB::table('estudiantes')->insert([
                    'matricula' => $faker->numerify('##########'),
                    'generacion' => $faker->numberBetween(2018, 2021),
                    'user_id' =>$id,
                ]);
            }
        }
    }
}
