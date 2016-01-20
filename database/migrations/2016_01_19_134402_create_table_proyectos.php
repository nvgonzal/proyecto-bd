<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProyectos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->text('descripcion');
            $table->date('fecha_inicio');
            $table->date('fecha_termino');
            $table->integer('valor');
            $table->integer('tipo_id')->unsigned();
            $table->string('cliente_rut',12)->nullable();
            $table->integer('estado_id')->unsigned();
            $table->foreign('tipo_id')->references('id')->on('tipo_proyecto')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('cliente_rut')->references('rut')->on('clientes')
                ->onUpdate('cascade')->onDelete('set null');
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
        Schema::drop('proyectos');
    }
}
