<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePkDiretor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('diretor', function (Blueprint $table) {
            $table->primary('dir_codigo');
        });

        Schema::table('estudio', function (Blueprint $table) {
            $table->primary('est_sigla');
        });

        Schema::table('genero', function (Blueprint $table) {
            $table->primary('gen_codigo');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('diretor', function (Blueprint $table) {
            $table->dropPrimary('dir_codigo');
        });

        Schema::table('estudio', function (Blueprint $table) {
            $table->dropPrimary('est_sigla');
        });

        Schema::table('genero', function (Blueprint $table) {
            $table->dropPrimary('gen_codigo');
        });
    }
}
