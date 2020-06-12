<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoogleMapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('google_maps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('edificio_id')->nullable();

            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();

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
        Schema::dropIfExists('google_maps');
    }
}
