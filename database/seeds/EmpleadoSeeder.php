<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('es_ES');

        $cargos = \App\Cargo::all()->lists('id')->toArray();


        for($i=0;$i<20;$i++){
            DB::table('empleados')->insert([
                'rut' => $faker->unique()->numerify('##.###.###-#'),
                'nombres' => $faker->firstName,
                'apellido_paterno' => $faker->lastName,
                'apellido_materno' => $faker->lastName,
                'valor_horas_hombre' => $faker->numberBetween(1000,20000),
                'cargo_id' => $faker->randomElement($cargos),
                'updated_at' => 'now',
                'created_at' => 'now'
            ]);
        }

    }
}
