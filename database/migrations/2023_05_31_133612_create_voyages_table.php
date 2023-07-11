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
        Schema::create('voyages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ville_d');
            $table->unsignedBigInteger('ville_a');
            $table->unsignedBigInteger('agence_d');
            $table->unsignedBigInteger('agence_a');
            $table->foreign('ville_d')->references('id')->on('villes');
            $table->foreign('ville_a')->references('id')->on('villes');
            $table->foreign('agence_d')->references('id')->on('agences');
            $table->foreign('agence_a')->references('id')->on('agences');
            $table->string('code');
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
        Schema::dropIfExists('_reservations');
    }
};
