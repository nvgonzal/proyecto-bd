<?php

use Illuminate\Database\Seeder;

class ProyectoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('es_ES');

        $clientes = \App\Cliente::all()->lists('rut')->toArray();

        $tipo_proyecto = \App\TipoProyecto::all()->lists('id')->toArray();

        $estados = \App\Estado::all()->lists('id')->toArray();

        for($i=0;$i<15;$i++){
            DB::table('proyectos')->insert([
                'nombre' => $faker->realText(255),
                'descripcion' => $faker->text(),
                'fecha_inicio' => $faker->date(),
                'fecha_termino' => $faker->date(),
                'valor' => $faker->numberBetween(100000,100000000),
                'tipo_id' => $faker->randomElement($tipo_proyecto),
                'cliente_rut' => $faker->randomElement($clientes),
                'estado_id' => $faker->randomElement($estados),
                'created_at' => 'now',
                'updated_at' => 'now'
            ]);
        }


    }
}
