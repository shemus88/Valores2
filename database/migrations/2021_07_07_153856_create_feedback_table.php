<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// @codingStandardsIgnoreLine
class CreateFeedbackTable extends Migration
{
    protected $valores = ['Nada satisfecho', 'Poco satisfecho', 'Neutral', 'Muy satisfecho','Totalmente satisfecho'];
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->time('hora');
            $table->foreignId('conferencia_id')
                        ->constrained('conferencias')
                        ->onDelete('cascade');
            $table->enum('p1', $this->valores);
            $table->enum('p2', $this->valores);
            $table->enum('p3', $this->valores);
            $table->enum('p4', $this->valores);
            $table->enum('p5', $this->valores);
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
        Schema::dropIfExists('feedback');
    }
}
