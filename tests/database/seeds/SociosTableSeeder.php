<?php

use Illuminate\Database\Seeder;

class SociosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('Socios')->delete();

        \DB::table('Socios')->insert(array(
            array( // row #0
                'id' => 1,
                'rut' => '5912048-4',
                'name' => 'Herbert Massmann L',
                'email' => 'hmassmann@laolleta.cl',
                'fono' => '8769555',
                'rep_legal' => 'Si',
                'porcen' => 50.00,
                'apopago' => 5000000,
                'apopend' => 0,
                'aporte' => 5000000,
                'notas' => '<p>Apontes para el socio HML</p>',
                'empresa_id' => 2,
                'empNamCorto' => 'ASA',
                'deleted_at' => NULL,
                'created_at' => '2018-05-01 00:47:26',
                'updated_at' => '2018-05-01 01:14:20',
            ),
            array( // row #1
                'id' => 2,
                'rut' => '6277231-K',
                'name' => 'Inge Massmann Leser',
                'email' => 'imassman@finger.cl',
                'fono' => NULL,
                'rep_legal' => 'Si',
                'porcen' => 50.00,
                'apopago' => 0,
                'apopend' => 5000000,
                'aporte' => 5000000,
                'notas' => NULL,
                'empresa_id' => 2,
                'empNamCorto' => 'ASA',
                'deleted_at' => NULL,
                'created_at' => '2018-05-01 00:49:29',
                'updated_at' => '2018-05-01 00:49:29',
            ),
            array( // row #2
                'id' => 5,
                'rut' => '6508654-9',
                'name' => 'MARIA ELENA HILLBRECHT WAGEMANN',
                'email' => 'm.hillb@gmail.com',
                'fono' => '98726514',
                'rep_legal' => 'Si',
                'porcen' => 90.00,
                'apopago' => 5400000,
                'apopend' => 0,
                'aporte' => 5400000,
                'notas' => NULL,
                'empresa_id' => 3,
                'empNamCorto' => 'ASA',
                'deleted_at' => NULL,
                'created_at' => '2018-05-25 15:48:51',
                'updated_at' => '2018-05-25 17:45:58',
            ),
            array( // row #3
                'id' => 8,
                'rut' => '8276861-0',
                'name' => 'Hermann Berkhoff Felis',
                'email' => 'Hermann@berkhoff.cm',
                'fono' => '24454321',
                'rep_legal' => 'Si',
                'porcen' => 100.00,
                'apopago' => 250000,
                'apopend' => 50000,
                'aporte' => 300000,
                'notas' => NULL,
                'empresa_id' => 1,
                'empNamCorto' => 'ASA',
                'deleted_at' => NULL,
                'created_at' => '2018-05-25 17:48:28',
                'updated_at' => '2018-05-25 17:48:46',
            ),
    ));
  }
}