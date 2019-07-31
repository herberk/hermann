<?php

use Illuminate\Database\Seeder;

class CiudadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        \DB::table('ciudades')->insert(array(
            array('id' => '1','name' => 'Villarrica','codigo' =>'0','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '2','name' => 'Temuco','codigo' =>'0','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '3','name' => 'Puco','codigo' =>'0','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '4','name' => 'Angol','codigo' =>'0','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '5','name' => 'Victoria','codigo' =>'0','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
            array('id' => '6','name' => 'Santiago','codigo' =>'0','created_at' => '2017-08-22 20:10:39','updated_at' => '2017-08-22 20:10:39'),
        ));
    }
}
