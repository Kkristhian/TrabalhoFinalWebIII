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
            $table->increments('id')->unsigned()->unique();
            $table->string('nome', 100);
            $table->date('ano');
            $table->integer('gen_codigo')->unsigned();
            $table->integer('est_id')->unsigned();
            $table->integer('dir_codigo')->unsigned();
            $table->integer('fx_etaria')->unsigned();
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
