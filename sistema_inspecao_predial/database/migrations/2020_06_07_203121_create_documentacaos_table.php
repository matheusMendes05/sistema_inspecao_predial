<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentacaos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sistema_id');
            $table->unsignedBigInteger('edificio_id');

            $table->string('nao_conformidade');
            $table->string('sistema');
            $table->string('imagem');
            $table->string('recomendacao_tecnica');
            $table->string('classificacao');
            $table->string('criticidade');

            $table->foreign('sistema_id')
                ->references('id')
                ->on('sistemas')
                ->onDelete('cascade');

            $table->foreign('edificio_id')
                ->references('id')
                ->on('edificios')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documentacao_sistemas');
        Schema::dropIfExists('documentacaos');
    }
}
