<?php

namespace Database\Seeders;

use App\Models\Conferencia;
use App\Models\Feedback;
use Illuminate\Database\Seeder;
use Faker;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //fecha, Hora, Conferencia_id, p1,p2,p3,p4,p5
        $faker = Faker\Factory::create();
        $conferencias = Conferencia::all();
        $satisfaccion = ['Nada satisfecho', 'Poco satisfecho', 'Neutral', 'Muy satisfecho', 'Totalmente satisfecho'];

        for ($i=1; $i<=100; $i++) {
            $fback = new Feedback();
            $fback->fecha = $faker->date();
            $fback->hora = $faker->time();
            $fback->conferencia_id = $conferencias->random()->id;
            $fback->p1 = $satisfaccion[rand(0, 4)];
            $fback->p2 = $satisfaccion[rand(0, 4)];
            $fback->p3 = $satisfaccion[rand(0, 4)];
            $fback->p4 = $satisfaccion[rand(0, 4)];
            $fback->p5 = $satisfaccion[rand(0, 4)];

            $fback->save();
        }
    }
}
