<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filme', function (Blueprint $table) {
            $tabela->increments('id');
            $tabela->string('nome', 100);
            $tabela->integer('ano', 4);
            $tabela->integer('gen_codigo');
            $tabela->integer('dir_codigo');
            $tabela->integer('fx_etaria');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('filme');
    }
}
