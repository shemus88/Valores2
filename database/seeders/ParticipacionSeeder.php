<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker;
use App\Models\Estudiante;
use App\Models\Conferencia;
use App\Models\Participacion;

class ParticipacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $estudiantes = Estudiante::all();
        $conferencias = Conferencia::all();

        for ($i=1; $i<=20; $i++) {
                $participaciones = new Participacion();
                $participaciones->estudiante_id = $estudiantes->random()->id;
                $participaciones->conferencia_id = $conferencias->random()->id;
                $participaciones->fecha = $faker->date();
                $participaciones->hora = $faker->time();
                $participaciones->save();
        }
    }
}
