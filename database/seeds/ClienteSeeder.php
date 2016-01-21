<?php

use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('es_ES');

        $sector = App\Sector::all()->lists('id')->toArray();

        for($i=0;$i<30;$i++){
            DB::table('clientes')->insert([
                'rut' => $faker->numerify('##.###.###-#'),
                'nombres' => $faker->firstName,
                'apellido_paterno' => $faker->lastName,
                'apellido_materno' => $faker->lastName,
                'direccion' => $faker->address,
                'email' => $faker->companyEmail,
                'telefono' => $faker->phoneNumber,
                'sector_id' => $faker->randomElement($sector),
                'fecha_ingreso' => $faker->date(),
                'created_at' => 'now',
                'updated_at' => 'now'
            ]);
        }
    }
}
