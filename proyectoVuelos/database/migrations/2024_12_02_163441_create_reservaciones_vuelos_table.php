<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('reservacionsVuelos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vuelo_id');
            $table->unsignedBigInteger('pasajero_id');
            $table->string('email_pasajero')->nullable();
            $table->integer('asiento');
            $table->timestamps();

            $table->foreign('vuelo_id')->references('id')->on('vuelos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservaciones');
    }
};
