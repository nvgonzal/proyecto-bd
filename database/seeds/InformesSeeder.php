<?php

use Illuminate\Database\Seeder;

class InformesSeeder extends Seeder
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

        for($i=0;$i<25;$i++){
            DB::table('informes')->insert([
                'texto' => $faker->realText(255),
                'fecha_creacion' => $faker->date(),
                'fecha_ultima_revision' => 'now',
                'proyecto_id' => $faker->randomElement($proyectos),
                'empleado_rut' => $faker->randomElement($empleados),
                'created_at' => 'now',
                'updated_at' => 'now'
            ]);
        }
    }
}
