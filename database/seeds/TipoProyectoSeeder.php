<?php

use Illuminate\Database\Seeder;

class TipoProyectoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipos=[
            'Base de Datos',
            'Aplicacion',
            'Mantencion'
        ];

        for($i=0;$i<3;$i++){
            DB::table('tipo_proyecto')->insert([
                'nombre' => $tipos[$i],
                'created_at' => 'now',
                'updated_at' => 'now'
            ]);
        }
    }
}
