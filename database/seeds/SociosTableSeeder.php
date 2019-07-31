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
        \DB::table('Socios')->insert(array(
            array( // row #0
                'id' => 1,
                'name' => 'Herbert Massmann L',
                'fono' => '8769555',
                'rut' => '5912048-4',
                'email' => 'hmassmann@laolleta.cl',
                'rep_legal' => 'Si',
                'porcen' => 50.00,
                'apopago' => 5000000,
                'apopend' => 0,
                'aporte' => 5000000,
                'acciones' => NULL,
                'notas' => '<p>Apontes para el socio HML</p>',
                'empresas_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2018-05-01 00:47:26',
                'updated_at' => '2019-05-04 13:18:58',
            ),
            array( // row #1
                'id' => 2,
                'name' => 'Inge Massmann Leser',
                'fono' => NULL,
                'rut' => '6277231-K',
                'email' => 'inge@finger.cl',
                'rep_legal' => 'Si',
                'porcen' => 50.00,
                'apopago' => 5000000,
                'apopend' => 0,
                'aporte' => 5000000,
                'acciones' => 0,
                'notas' => '<p>Nota para Inge</p>',
                'empresas_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2018-05-01 00:49:29',
                'updated_at' => '2019-05-06 15:15:03',
            ),
            array( // row #2
                'id' => 3,
                'name' => 'Maria Elena Hilberch Wagemann',
                'fono' => '98726514',
                'rut' => '6508654-9',
                'email' => 'ind@cente.cl',
                'rep_legal' => 'Si',
                'porcen' => 90.00,
                'apopago' => 5400000,
                'apopend' => 0,
                'aporte' => 5400000,
                'acciones' => 0,
                'notas' => '<p>Notas para mariana</p>',
                'empresas_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2018-05-25 15:48:51',
                'updated_at' => '2019-05-14 17:04:26',
            ),
            array( // row #10
                'id' => 4,
                'name' => 'Marlena Quintana Hillbrecht',
                'fono' => NULL,
                'rut' => '10885137-6',
                'email' => 'ind@cente.cl',
                'rep_legal' => 'No',
                'porcen' => 10.00,
                'apopago' => 600000,
                'apopend' => 0,
                'aporte' => 600000,
                'acciones' => 0,
                'notas' => NULL,
                'empresas_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2019-05-14 17:06:23',
                'updated_at' => '2019-05-14 17:06:23',
            ),
    ));
  }
}