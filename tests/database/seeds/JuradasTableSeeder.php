<?php

use Illuminate\Database\Seeder;

class JuradasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('juradas')->delete();

        \DB::table('juradas')->insert(array(
            array('id' => '1','nro_dj'=>'1923','fe_vence' =>'2018-03-22','descripcion'=>'Declaración Jurada Anual sobre', 'Certificado'=>'53','declara'=>'si','estado'=>'Aceptada','Instrucion'=>'Por ver', 'ruta_sii'=>'/', 'empresa_id'=>'1' ,'created_at' => '2017-05-22 20:10:39','updated_at' => '2017-05-22 20:10:39'),
            array('id' => '2','nro_dj'=>'1847','fe_vence' =>'2018-05-04','descripcion'=>'Declaración Jurada Anual sobre', 'Certificado'=>'53','declara'=>'si','estado'=>'Aceptada','Instrucion'=>'Por ver', 'ruta_sii'=>'/', 'empresa_id'=>'1' ,'created_at' => '2017-05-22 20:10:39','updated_at' => '2017-05-22 20:10:39'),
            array('id' => '3','nro_dj'=>'1938','fe_vence' =>'2018-03-22','descripcion'=>'Declaración Jurada Anual sobre', 'Certificado'=>'53','declara'=>'si','estado'=>'Aceptada','Instrucion'=>'Por ver', 'ruta_sii'=>'/', 'empresa_id'=>'1' ,'created_at' => '2017-05-22 20:10:39','updated_at' => '2017-05-22 20:10:39'),
            array('id' => '4','nro_dj'=>'1940','fe_vence' =>'2018-03-22','descripcion'=>'Declaración Jurada Anual sobre', 'Certificado'=>'53','declara'=>'si','estado'=>'Aceptada','Instrucion'=>'Por ver', 'ruta_sii'=>'/', 'empresa_id'=>'1' ,'created_at' => '2017-05-22 20:10:39','updated_at' => '2017-05-22 20:10:39'),
            array('id' => '5','nro_dj'=>'1979','fe_vence' =>'2018-03-23','descripcion'=>'Declaración Jurada Anual sobre', 'Certificado'=>'53','declara'=>'si','estado'=>'Aceptada','Instrucion'=>'Por ver', 'ruta_sii'=>'/', 'empresa_id'=>'1' ,'created_at' => '2017-05-22 20:10:39','updated_at' => '2017-05-22 20:10:39'),
            array('id' => '6','nro_dj'=>'1987','fe_vence' =>'2018-03-19','descripcion'=>'Declaración Jurada Anual sobre', 'Certificado'=>'53','declara'=>'si','estado'=>'Aceptada','Instrucion'=>'Por ver', 'ruta_sii'=>'/', 'empresa_id'=>'1' ,'created_at' => '2017-05-22 20:10:39','updated_at' => '2017-05-22 20:10:39'),
         ));
    }
}
