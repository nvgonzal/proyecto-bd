<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableInformes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informes', function (Blueprint $table) {
            $table->increments('id');
            $table->text('texto');
            $table->date('fecha_creacion');
            $table->date('fecha_ultima_revision');
            $table->integer('proyecto_id')->unsigned();
            $table->string('empleado_rut',12)->nullable();

            $table->foreign('proyecto_id')->references('id')->on('proyectos')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('empleado_rut')->references('rut')->on('empleados')
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
        Schema::drop('informes');
    }
}
