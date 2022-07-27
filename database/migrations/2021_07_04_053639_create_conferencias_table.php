<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// @codingStandardsIgnoreLine
class CreateConferenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conferencias', function (Blueprint $table) {
            $table->id();
            $table->string('tema', 100);
            $table->date('fecha');
            $table->time('hora');
            $table->text('proposito');
            $table->string('duracion');
            $table->string('participantes');
            $table->foreignId('lugar_id')
                        ->nullable()
                        ->constrained('lugares')
                        ->onDelete('set null');
            $table->foreignId('conferencista_id')
                        ->nullable()
                        ->constrained('conferencistas')
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
        Schema::dropIfExists('conferencias');
    }
}
