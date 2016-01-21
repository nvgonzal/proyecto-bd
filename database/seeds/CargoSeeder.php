<?php

use Illuminate\Database\Seeder;

class CargoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cargos = [
            'Jefe de proyecto',
            'Analista',
            'Diseñador',
            'Programador',
            'Testeo'
        ];

        for($i=0;$i<5;$i++){
            DB::table('cargos')->insert([
                'nombre' => $cargos[$i],
                'updated_at' => 'now',
                'created_at' => 'now'
            ]);
        }
    }
}
