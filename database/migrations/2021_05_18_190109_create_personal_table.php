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
            $table->char('id_personal',10);
            $table->string('nombre',30);
            $table->string('apellido1',20);
            $table->string('apellido2',20);
            $table->char('telefono',9);
            $table->string('correo',75)->nullable();
            $table->string('direccion',80);
            $table->string('ciudad',40);
            $table->string('id_doctor',10)->unique();
            $table->string('password',80);
            $table->char('id_admin',10);
            $table->timestamps();
            $table->unique('id_personal');
            $table->primary('id_personal');
            $table->foreign('id_admin')->references('id_admin')->on('administradores')->onDelete('cascade');
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
