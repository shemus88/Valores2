<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// @codingStandardsIgnoreLine
class CreateConferencistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conferencistas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 60);
            $table->string('ap_paterno', 60);
            $table->string('ap_materno', 60);
            $table->string('email', 100);
            $table->string('numcel', 100);
            $table->string('perfil', 100);
            $table->string('foto');
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
        Schema::dropIfExists('conferencistas');
    }
}
