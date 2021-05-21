<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministradoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administradores', function (Blueprint $table) {
            $table->char('id_admin',10)->nullable();
            $table->string('nombre',30)->nullable();
            $table->string('apellido1',20)->nullable();
            $table->string('apellido2',20)->nullable();
            $table->char('telefono',9)->nullable();
            $table->string('correo',75);
            $table->string('direccion',80)->nullable();
            $table->string('ciudad',40)->nullable();
            $table->char('password',64)->nullable();
            $table->char('id_personal',10);
            $table->timestamps();
            $table->unique('id_admin');
            $table->primary('id_admin');
            $table->foreignId('id_personal')->constrained('personal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('administradores');
    }
}
