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
        Schema::create('type_reservations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('prix_kilo')->nullable();
            $table->float('prix_adulte')->nullable();
            $table->float('prix_enfant')->nullable();
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
        Schema::dropIfExists('_type_reservations');
    }
};
