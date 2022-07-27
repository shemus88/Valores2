<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker;
use App\Models\Conferencia;
use App\Models\Conferencista;
use App\Models\Lugar;

class ConferenciasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $lugares = Lugar::all();
        $conferencistas = Conferencista::all();

        for ($i=1; $i<=20; $i++) {
                $conferencias = new Conferencia;
                $conferencias->tema = $faker->sentence();
                $conferencias->fecha = $faker->date();
                $conferencias->hora = $faker->time();
                $conferencias->proposito = $faker->text;
                $conferencias->duracion = $faker->numberBetween(30, 90);
                $conferencias->participantes = $faker->sentence();
                $conferencias->lugar_id = $lugares->random()->id;
                $conferencias->conferencista_id = $conferencistas->random()->id;
                $conferencias->save();
        }
    
}
}