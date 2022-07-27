<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker;
use App\Models\Encuesta;
use Illuminate\Support\Facades\DB;

class EncuestaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker\Factory::create();
        $valores = ['Enero - Abril ', 'Mayo - Agosto ', 'Septiembre - Diciembre '];
        $usersadmin = DB::table('users')->where('rol', 'Admin')->get();

        for ($i = 1; $i <= 100; $i++) {
            $encues = new Encuesta();
            $encues->periodo = $valores[rand(0, 2)] . rand(2018, 2021);
            $encues->fecha_inicio = $faker->dateTimeBetween('-5 years');
            $encues->fecha_termina = $faker->dateTimeBetween('-5 years');
            $encues->responsable = $usersadmin->random()->name;
            $encues->save();
        }
    }
}
