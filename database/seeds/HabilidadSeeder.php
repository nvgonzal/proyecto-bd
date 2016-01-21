<?php

use Illuminate\Database\Seeder;

class HabilidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $habilidades = [
            'Base de datos',
            'Analisis',
            'Aplicaciones moviles',
            'Diseño',
            'Mantencion'
        ];

        for($i=0;$i<5;$i++){
            DB::table('habilidades')->insert([
                'nombre' => $habilidades[$i],
                'created_at' => 'now',
                'updated_at' => 'now'
            ]);
        }
    }
}
