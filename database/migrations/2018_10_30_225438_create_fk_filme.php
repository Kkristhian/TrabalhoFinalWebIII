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
            $table->foreign('dir_codigo')->references('id')->on('diretor');     
            $table->foreign('gen_codigo')->references('id')->on('genero');
            $table->foreign('est_id')->references('id')->on('estudio');
        });

        Schema::table('diretor', function (Blueprint $table) {           
            $table->foreign('est_id')->references('id')->on('estudio');     
            
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
