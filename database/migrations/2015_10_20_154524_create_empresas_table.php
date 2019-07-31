<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('rut',12)->unique();
            $table->string('name');
            $table->string('name_corto',10)->unique();
            $table->integer('arti_id')->unsigned();
            $table->string('tipo')->nullable();
            $table->string('actividad')->nullable();
            $table->string('direccion')->nullable();
            $table->integer('region_id')->unsigned()->nullable();
            $table->string('region')->nullable();
            $table->integer('comuna_id')->unsigned()->nullable();
            $table->string('comuna')->nullable();
            $table->integer('ciudad_id')->unsigned()->nullable();
            $table->string('ciudad')->nullable();
            $table->integer('codpostal')->nullable();
            $table->string('email')->unique();
            $table->string('fono')->nullable();
            $table->date('fe_inicio')->nullable();
            $table->string('tipo_tri',10)->nullable();
            $table->string('segmento',10)->nullable();
            $table->string('codigo')->nullable();
            $table->string('giro')->nullable();
            $table->string('logo')->nullable();
            $table->double('capital');
            $table->string('notario')->nullable();
            $table->date('fe_notario')->nullable();
            $table->string('repertorio')->nullable();
            $table->string('nro_edicion')->nullable();
            $table->date('fe_diario')->nullable();
            $table->string('reg_comercio')->nullable();
            $table->text('notas')->nullable();
//            $table->integer('jurada_id')->unsigned();
//            $table->foreign('jurada_id')->references('id')->on('juradas');
            $table->softDeletes();
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
        Schema::drop('empresas');
    }

}
