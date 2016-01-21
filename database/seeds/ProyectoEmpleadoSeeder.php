<?php

use Illuminate\Database\Seeder;

class ProyectoEmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('es_ES');

        $empleados = \App\Empleado::all()->lists('rut')->toArray();

        $proyectos = \App\Proyecto::all()->lists('id')->toArray();

        for($i=0;$i<20;$i++){
            DB::table('empleados_proyectos')->insert([
                'proyecto_id' => $faker->randomElement($proyectos),
                'empleado_rut' => $faker->randomElement($empleados),
                'created_at' => 'now',
                'updated_at' => 'now'
            ]);
        }
    }
}
