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
            $table->char('id_admin',10);
            $table->string('nombre',30);
            $table->string('apellido1',20);
            $table->string('apellido2',20);
            $table->char('telefono',9);
            $table->string('correo',75)->nullable();
            $table->string('direccion',80);
            $table->string('ciudad',40);
            $table->string('password',80);
            $table->timestamps();
            $table->unique('id_admin');
            $table->primary('id_admin');
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
