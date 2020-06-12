<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSistemasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sistemas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('edificio_id');

            $table->string('sistema');
            $table->string('elemento');
            $table->string('local')->nullable();
            $table->string('imagem')->nullable();
            $table->string('obs')->nullable();

            $table->foreign('edificio_id')->references('id')->on('edificios')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sistemas');
    }
}
