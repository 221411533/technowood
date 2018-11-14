<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Proveedor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('telefono')->unique();
            $table->string('contraseña');
            $table->string('calle');
            $table->string('colonia');
            $table->string('estado');
            $table->integer('no_interior');
            $table->integer('no_exterior');
            $table->integer('cp');
            $table->string('municipio');
            $table->string('correo')->unique();
            $table->integer('producto_id')->unsigned();

            $table->foreign('producto_id')->references('id')->on('productos')->onDelete('cascade');

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
        Schema::dropIfExists('proveedores');
    }
}
