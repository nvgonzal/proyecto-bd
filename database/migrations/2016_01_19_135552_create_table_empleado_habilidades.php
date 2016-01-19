<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEmpleadoHabilidades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados_habilidades', function (Blueprint $table) {
            $table->string('rut_empleado',12);
            $table->integer('id_habilidad')->unsigned();

            $table->foreign('rut_empleado')->references('rut')->on('empleados')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('id_habilidad')->references('id')->on('habilidades')
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
        Schema::drop('empleados_habilidades');
    }
}
