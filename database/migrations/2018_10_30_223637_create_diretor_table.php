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
            $table->increments('id')->unsigned()->unique();
            $table->integer('est_id')->unsigned();
            $table->string('nome_dir', 50);
            $table->integer('idade');
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
