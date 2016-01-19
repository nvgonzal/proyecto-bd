<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->string('rut',12);
            $table->string('nombres',50);
            $table->string('apellido_paterno',50);
            $table->string('apellido_materno',50);
            $table->string('direccion');
            $table->string('email',60);
            $table->date('fecha_ingreso');
            $table->integer('sector_id')->unsigned();
            $table->primary('rut');
            $table->foreign('sector_id')->references('id')->on('sectores')
                ->onUpdate('cascade')->onDelete('restrict');
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
        Schema::drop('clientes');
    }
}
