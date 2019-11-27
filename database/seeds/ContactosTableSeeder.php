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
        \DB::table('Contactos')->insert(array(
            array(
                "id" => 1,
                "rut" => "8276861-0",
                "name" => "Hermann Berkhoff",
                "email" => "Hermann@berkhoff.cl",
                "fono" => "45-2987654",
                "notas" => "",
                "empresas_id" => 2,
                "deleted_at" => NULL,
                "created_at" => "2018-05-16 13:59:12",
                "updated_at" => "2018-05-16 13:59:12",
            ),
            array(
                "id" => 2,
                "rut" => "16632114-K",
                "name" => "Susana Sandoval",
                "email" => "Susana@gemail.com",
                "fono" => NULL,
                "notas" => "<p>Holoa nsusana cuales tu rut</p>",
                "empresas_id" => 2,
                "deleted_at" => NULL,
                "created_at" => "2018-05-16 13:59:49",
                "updated_at" => "2019-11-25 10:42:39",
            ),
            array(
                "id" => 3,
                "rut" => NULL,
                "name" => "Ana Barria Ibersen",
                "email" => "Abariia@gmail.com",
                "fono" => "45-294321",
                "notas" => "",
                "empresas_id" => 2,
                "deleted_at" => "2019-11-25 10:39:18",
                "created_at" => "2018-05-16 14:00:42",
                "updated_at" => "2019-11-25 10:39:18",
            ),
            array(
                "id" => 4,
                "rut" => "15259790-8",
                "name" => "Miguel Melo",
                "email" => "adm.cente@gmail.com",
                "fono" => "452544734",
                "notas" => "<p>Maria Elena Hillbrecht Wageman Fono 98726514<br />\r\nSergio Heise Fernandez Fono 98876393<br />\r\n<br />\r\nConexi&oacute;n escritorio asp.eugcom.com<br />\r\ndaniel2<br />\r\ndaniel370<br />\r\nPRG Contabilidad usuario:1004<br />\r\nClave 9889<br />\r\nMiguel 452544734<br />\r\ncacoquintana@gmail.com</p>",
                "empresas_id" => 3,
                "deleted_at" => NULL,
                "created_at" => "2019-11-25 10:47:47",
                "updated_at" => "2019-11-25 10:48:31",
            ),
        ));
    }

}
