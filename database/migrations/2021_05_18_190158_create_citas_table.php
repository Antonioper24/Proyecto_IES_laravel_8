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
            $table->char('id_cita',10);
            $table->char('num_radiogra',12);
            $table->string('tratamiento',40);
            $table->text('descripcion');
            $table->decimal('precio',$precision = 5,$scale = 2);
            $table->date('fecha');
            $table->char('num_expe',12);
            $table->timestamps();
            $table->unique('id_cita');
            $table->primary('id_cita');
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
