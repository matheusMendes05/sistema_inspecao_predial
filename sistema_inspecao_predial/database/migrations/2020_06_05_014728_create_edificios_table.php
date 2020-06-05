<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEdificiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('edificios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('responsavel_inspecao')->nullable();
            $table->string('data')->nullable();
            $table->string('nome_edificio')->nullable();
            $table->string('endereco')->nullable();
            $table->string('bairro')->nullable();
            $table->string('complemento')->nullable();
            $table->string('cep')->nullable();
            $table->string('cnpj')->nullable();
            $table->string('responsavel_edificio')->nullable();

            $table->string('responsavel_telefone')->nullable();
            $table->string('responsavel_email')->nullable();
            $table->string('tipologia')->nullable();

            $table->string('outros')->nullable();
            $table->string('n_pavimentos')->nullable();
            $table->string('ano_construcao')->nullable();
            $table->string('construtora')->nullable();
            $table->string('administrador')->nullable();
        });

        Schema::create('edificio_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('edificio_id');
            $table->unsignedBigInteger('user_id');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
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
        Schema::dropIfExists('usuarios_edificios');
        Schema::dropIfExists('edificios');
    }
}
