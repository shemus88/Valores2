<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// @codingStandardsIgnoreLine
class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('appaterno');
            $table->string('apmaterno');
            $table->string('email')->unique();
            $table->string('foto');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('rol', ['Admin','Estudiante','Tutor','Coordinador']);
            $table->enum('sexo', ['Masculino','Femenino']);
            $table->enum('status', ['Activo', 'Baja Temporal','Baja Definitiva']);
            $table->foreignId('carrera_id')
                    ->nullable()
                    ->constrained('carreras')
                    ->onDelete('set null');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
