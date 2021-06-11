<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTratamientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tratamiento', function (Blueprint $table) {
            $table->id();
            $table->string('tratamiento',40);
            $table->decimal('precio',$precision = 5,$scale = 2);
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
        Schema::dropIfExists('tratamiento');
    }
}