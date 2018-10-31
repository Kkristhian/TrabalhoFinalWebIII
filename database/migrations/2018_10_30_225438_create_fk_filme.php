<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFkFilme extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('filme', function (Blueprint $table) {           
            $table->foreign('dir_codigo')->references('dir_codigo')->on('diretor');
        });

        Schema::table('filme', function (Blueprint $table) {           
            $table->foreign('gen_codigo')->references('gen_codigo')->on('genero');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('filme', function (Blueprint $table) {           
            $table->dropForeign(['dir_codigo']);
        });

        Schema::table('filme', function (Blueprint $table) {           
            $table->dropForeign(['gen_codigo']);
        });
    }
}
