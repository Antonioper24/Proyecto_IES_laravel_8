<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->string('num_radiogra',12);
            $table->string('tratamiento',40);
            $table->text('descripcion');
            $table->date('fecha')->nullable();
            $table->string('hora',5)->nullable();
            $table->string('cita',20)->nullable();
            $table->char('num_expe',12);
            $table->timestamps();
	    //$table->foreignId('num_expe')->constrained('cliente');
	    $table->foreign('num_expe')->references('num_expe')->on('clientes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citas');
    }
}
