<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal', function (Blueprint $table) {
            $table->char('id_personal',10)->nullable();
            $table->string('nombre',30)->nullable();
            $table->string('apellido1',20)->nullable();
            $table->string('apellido2',20)->nullable();
            $table->char('telefono',9)->nullable();
            $table->string('correo',75);
            $table->string('direccion',80)->nullable();
            $table->string('ciudad',40)->nullable();
            $table->string('id_doctor',10)->nullable()->unique();
            $table->string('password',80)->nullable();
            $table->timestamps();
            $table->unique('id_personal');
            $table->primary('id_personal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal');
    }
}
