<?php

use Illuminate\Database\Seeder;

class ContactosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        \DB::table('Contactos')->delete();

        \DB::table('Contactos')->insert(array(
            array( // row #0
                'id' => 1,
                'rut' => '8276861-0',
                'name' => 'Hermann Berkhoff',
                'email' => 'Hermann@berkhoff.cl',
                'fono' => '45-2987654',
                'notas' => '',
                'empresas_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2018-05-16 13:59:12',
                'updated_at' => '2018-05-16 13:59:12',
            ),
            array( // row #1
                'id' => 2,
                'rut' => NULL,
                'name' => 'Susana Sandoval',
                'email' => 'Susana@gemail.com',
                'fono' => NULL,
                'notas' => '',
                'empresas_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2018-05-16 13:59:49',
                'updated_at' => '2018-05-16 13:59:49',
            ),
            array( // row #2
                'id' => 3,
                'rut' => NULL,
                'name' => 'Ana Barria Ibersen',
                'email' => 'Abariia@gmail.com',
                'fono' => '45-294321',
                'notas' => '',
                'empresas_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2018-05-16 14:00:42',
                'updated_at' => '2018-05-16 14:00:42',
            ),
        ));
    }

}
