<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJuradasTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juradas', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('nro_dj');
            $table->string('desc_corta',15)->nullable();
            $table->date('fe_vence');
            $table->string('descripcion')->nullable;
            $table->string('certificado')->nullable;
            $table->enum('declara',['Si','No']);
            $table->enum('estado',['Preparada','Enviada','Observada','Aceptada']);
            $table->text('Instrucion')->nullable;
            $table->string('ruta_sii')->nullable;
            $table->integer('empresa_id')->unsigned()->nullable;
//            $table->foreign('empresa_id')->references('id')->on('empresas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('juradas');
    }

}
