<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVizitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vizites', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('hastaID');
            $table->unsignedBigInteger('poliklinikID');
            $table->unsignedBigInteger('oncelikID')->nullable();
            $table->string('viziteTarihi');
            $table->string('baslamaZamani');
            $table->string('bitisZamani');
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
        Schema::dropIfExists('vizites');
    }
}
