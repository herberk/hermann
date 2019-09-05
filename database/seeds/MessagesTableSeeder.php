<?php

use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('messages')->insert(array(

            array(
                "id" => 1,
                "name" => "Juanita Lagos",
                "email" => "juanida@delagos.cl",
                "message" => "El jaro se rompió y nadie respondio, quien paga ??",
                "message" => "El jaro se rompió y nadie respondio, quien paga ??",
                "active" => 1,
                "user_id" => 2,
                "deleted_at" => NULL,
                "created_at" => "2019-06-11 12:32:14",
                "updated_at" => "2019-06-11 12:32:14",
            ),
            array(
                "id" => 2,
                "name" => "fdfdgsdfgsgdf",
                "email" => "lñkjj@hhhdf.cl",
                "message" => "ergeqrgerger gqeregrgeqrger rgegegergre geggerqqe rer  sdaljkkhn  fdweklhj dfewwkl ewfg weewew fewkljhjew",
                "message" => "ergeqrgerger gqeregrgeqrger rgegegergre geggerqqe rer  sdaljkkhn  fdweklhj dfewwkl ewfg weewew fewkljhjew",
                "active" => 0,
                "user_id" => 1,
                "deleted_at" => NULL,
                "created_at" => "2019-06-11 12:33:31",
                "updated_at" => "2019-06-11 12:33:31",
            ),

        ));
    }
}
