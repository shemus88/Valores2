<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// @codingStandardsIgnoreLine
class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();
            $table->string('matricula', 10);
            $table->string('generacion', 4);
            $table->string('foto');
            $table->foreignId('user_id')
                            ->unique()
                            ->constrained('users')
                            ->onDelete('cascade');
            $table->foreignId('carrera_id')
                            ->nullable()
                            ->constrained('carreras')
                            ->onDelete('set null');               
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
        Schema::dropIfExists('estudiantes');
    }
}
