<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Ramsey\Uuid\v1;

//@codingStandardsIgnoreLine
class CreateRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('estudiante_id')
                    ->constrained('estudiantes')
                    ->onDelete('cascade');
            $table->foreignId('encuesta_id')
                    ->constrained('encuestas')
                    ->onDelete('cascade');
            $table->tinyInteger('r001', false, true);
            $table->tinyInteger('r002', false, true);
            $table->tinyInteger('r003', false, true);
            $table->tinyInteger('r004', false, true);
            $table->tinyInteger('r005', false, true);
            $table->tinyInteger('r006', false, true);
            $table->tinyInteger('r007', false, true);
            $table->tinyInteger('r008', false, true);
            $table->tinyInteger('r009', false, true);
            $table->tinyInteger('r010', false, true);
            $table->tinyInteger('r011', false, true);
            $table->tinyInteger('r012', false, true);
            $table->tinyInteger('r013', false, true);
            $table->tinyInteger('r014', false, true);
            $table->tinyInteger('r015', false, true);
            $table->tinyInteger('r016', false, true);
            $table->tinyInteger('r017', false, true);
            $table->tinyInteger('r018', false, true);
            $table->tinyInteger('r019', false, true);
            $table->tinyInteger('r020', false, true);
            $table->tinyInteger('r021', false, true);
            $table->tinyInteger('r022', false, true);
            $table->tinyInteger('r023', false, true);
            $table->tinyInteger('r024', false, true);
            $table->tinyInteger('r025', false, true);
            $table->tinyInteger('r026', false, true);
            $table->tinyInteger('r027', false, true);
            $table->tinyInteger('r028', false, true);
            $table->tinyInteger('r029', false, true);
            $table->tinyInteger('r030', false, true);
            $table->tinyInteger('r031', false, true);
            $table->tinyInteger('r032', false, true);
            $table->tinyInteger('r033', false, true);
            $table->tinyInteger('r034', false, true);
            $table->tinyInteger('r035', false, true);
            $table->tinyInteger('r036', false, true);
            $table->tinyInteger('r037', false, true);
            $table->tinyInteger('r038', false, true);
            $table->tinyInteger('r039', false, true);
            $table->tinyInteger('r040', false, true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('respuestas');
    }
}
