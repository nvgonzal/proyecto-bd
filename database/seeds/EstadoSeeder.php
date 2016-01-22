<?php

use Illuminate\Database\Seeder;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estados = [
            'Activo',
            'Terminado',
            'Inactivo',
            'Cancelado'
        ];
        for($i=0;$i<4;$i++){
            DB::table('estados')->insert([
                'nombre' => $estados[$i],
                'created_at' => 'now',
                'updated_at' => 'now'
            ]);
        }

    }
}
