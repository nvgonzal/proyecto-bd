<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEmpleadosProyectos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados_proyectos', function (Blueprint $table) {
            $table->integer('proyecto_id')->unsigned();
            $table->string('empleado_rut',12);
            $table->foreign('proyecto_id')->references('id')->on('proyectos')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('empleado_rut')->references('rut')->on('empleados')
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
        Schema::drop('empleados_proyectos');
    }
}
