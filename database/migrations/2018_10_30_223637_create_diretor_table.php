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
            $tabela->integer('dir_codigo');
            $tabela->string('est_sigla', 10);
            $tabela->integer('ano', 100);
            $tabela->string('nome_dir', 50);
            $tabela->integer('dir_codigo');
            $tabela->integer('idade');
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
