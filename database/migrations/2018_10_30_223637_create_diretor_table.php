<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiretorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diretor', function (Blueprint $table) {
            $table->increments('dir_codigo')->unsigned()->unique();
            $table->string('est_sigla', 10);
            $table->integer('ano')->unsigned();
            $table->string('nome_dir', 50);
            $table->integer('dir_codigo')->unsigned();;
            $table->integer('idade')->unsigned();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diretor');
    }
}
