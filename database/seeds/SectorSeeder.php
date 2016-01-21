<?php

use Illuminate\Database\Seeder;

class SectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('es_ES');

        $nombre = [
            'Inmovilaria',
            'Salud',
            'Educacion',
            'Automotriz'
        ];

        for($i=0;$i<4;$i++){
            DB::table('sectores')->insert([
               'nombre' => $nombre[$i],
                'created_at' => 'now',
                'updated_at' => 'now'
            ]);
        }

    }
}
