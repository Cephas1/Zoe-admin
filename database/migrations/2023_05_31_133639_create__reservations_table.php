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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('voyage_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('type_reservation_id');
            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('voyage_id')->references('id')->on('voyages');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('type_reservation_id')->references('id')->on('type_reservations');
            $table->float('montant');
            $table->string('code');
            $table->dateTime('embarquement')->nullable();
            $table->dateTime('debarquement')->nullable();
            $table->date('retour')->nullable();
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
