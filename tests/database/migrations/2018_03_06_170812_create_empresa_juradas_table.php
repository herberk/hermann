<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresaJuradasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa_juradas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('empresa_id')->unsigned()->index();
            $table->foreign('empresa_id')->references('id')->on('empresas')->onDelete('cascade');
            $table->integer('jurada_id')->unsigned()->index();
            $table->foreign('jurada_id')->references('id')->on('juradas')->onDelete('cascade');
//            $table->primary(['empresa_id', 'jurada_id']);
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
        Schema::dropIfExists('empresa_juradas');
    }
}
