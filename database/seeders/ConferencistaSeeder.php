<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker;
use App\Models\Conferencista;

class ConferencistaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        //$status = ['Listo', 'Libre','Ocupado', 'Solicitado'];

        for ($i=1; $i<=20; $i++) {
                $conferencista = new Conferencista;
                $conferencista->nombre = $faker->name();
                $conferencista->ap_paterno = $faker->lastName;
                $conferencista->ap_materno = $faker->lastName;
                $conferencista->email = $faker->unique()->email;
                $conferencista->numcel = $faker->phoneNumber;
                $conferencista->perfil = $faker->jobTitle;
                $conferencista->foto=$faker->name();
                //$conferencista->status = $status[rand(0, 3)];
                $conferencista->save();
        }
    }
}
