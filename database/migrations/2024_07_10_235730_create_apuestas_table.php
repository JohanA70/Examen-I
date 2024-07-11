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
        Schema::create('apuesta', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_juego')->constrained('juegos');
            $table->dateTime('fecha');
            $table->integer('monto');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apuesta');
    }
};
