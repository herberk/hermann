<?php

use Illuminate\Database\Seeder;

class FilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('files')->delete();

        \DB::table('files')->insert(array(
            array( // row #0
                'id' => 2,
                'name' => 'Estadisticas C y P-2018.xls',
                'size' => 178688,
                'extension' => 'xls',
                'public_url' => 'https://www.dropbox.com/s/hz7c9crwsd2xekc/Estadisticas%20C%20y%20P-2018.xls?dl=0',
                'created_at' => '2018-06-28 14:51:59',
                'updated_at' => '2018-06-28 14:51:59',
            ),
            array( // row #1
                'id' => 3,
                'name' => 'Cuadratura Banco Segurity C&P año 2018.xlsx',
                'size' => 14662,
                'extension' => 'xlsx',
                'public_url' => 'https://www.dropbox.com/s/5yyva1fdxu60ti0/Cuadratura%20Banco%20Segurity%20C%26P%20a%C3%B1o%202018.xlsx?dl=0',
                'created_at' => '2018-06-28 15:16:58',
                'updated_at' => '2018-06-28 15:16:58',
            ),
            array( // row #2
                'id' => 4,
                'name' => 'CONTRATO DE COMPRA Y VENTA DE ACCIONES MARIANA E INGE.pdf',
                'size' => 3493623,
                'extension' => 'pdf',
                'public_url' => 'https://www.dropbox.com/s/esswjsgyq84li0c/CONTRATO%20DE%20COMPRA%20Y%20VENTA%20DE%20ACCIONES%20MARIANA%20E%20INGE.pdf?dl=0',
                'created_at' => '2018-06-28 16:35:33',
                'updated_at' => '2018-06-28 16:35:33',
            ),
            array( // row #3
                'id' => 5,
                'name' => 'balance olleta cyp sa 2017.pdf',
                'size' => 19241,
                'extension' => 'pdf',
                'public_url' => 'https://www.dropbox.com/s/ktp2nqqinwo9zz8/balance%20olleta%20cyp%20sa%202017.pdf?dl=0',
                'created_at' => '2018-06-28 18:35:11',
                'updated_at' => '2018-06-28 18:35:11',
            ),
        ));
    }
}
