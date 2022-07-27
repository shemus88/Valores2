<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker;
use Illuminate\Support\Facades\DB;
use App\Models\Respuesta;

class RespuestaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estudiantes = DB::table('estudiantes')->get();
        $encuestas = DB::table('encuestas')->get();

        for ($i = 1; $i <= 100; $i++) {
            $resp = new Respuesta();
            $resp->estudiante_id = $estudiantes->random()->id;
            $resp->encuesta_id = $encuestas->random()->id;

            $resp->r001 = rand(0, 6);
            $resp->r002 = rand(0, 6);
            $resp->r003 = rand(0, 6);
            $resp->r004 = rand(0, 6);
            $resp->r005 = rand(0, 6);
            $resp->r006 = rand(0, 6);
            $resp->r007 = rand(0, 6);
            $resp->r008 = rand(0, 6);
            $resp->r009 = rand(0, 6);
            $resp->r010 = rand(0, 6);
            $resp->r011 = rand(0, 6);
            $resp->r012 = rand(0, 6);
            $resp->r013 = rand(0, 6);
            $resp->r014 = rand(0, 6);
            $resp->r015 = rand(0, 6);
            $resp->r016 = rand(0, 6);
            $resp->r017 = rand(0, 6);
            $resp->r018 = rand(0, 6);
            $resp->r019 = rand(0, 6);
            $resp->r020 = rand(0, 6);
            $resp->r021 = rand(0, 6);
            $resp->r022 = rand(0, 6);
            $resp->r023 = rand(0, 6);
            $resp->r024 = rand(0, 6);
            $resp->r025 = rand(0, 6);
            $resp->r026 = rand(0, 6);
            $resp->r027 = rand(0, 6);
            $resp->r028 = rand(0, 6);
            $resp->r029 = rand(0, 6);
            $resp->r030 = rand(0, 6);
            $resp->r031 = rand(0, 6);
            $resp->r032 = rand(0, 6);
            $resp->r033 = rand(0, 6);
            $resp->r034 = rand(0, 6);
            $resp->r035 = rand(0, 6);
            $resp->r036 = rand(0, 6);
            $resp->r037 = rand(0, 6);
            $resp->r038 = rand(0, 6);
            $resp->r039 = rand(0, 6);
            $resp->r040 = rand(0, 6);
        
            $resp->save();
        }
    }
}
