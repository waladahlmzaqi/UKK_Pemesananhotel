<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fasi_kamars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kamar_id');
            $table->string('nama_fasilitas');
            $table->timestamps();

            $table->foreign('kamar_id')->references('id')->on('kamars');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fasi_kamars');
    }
};
