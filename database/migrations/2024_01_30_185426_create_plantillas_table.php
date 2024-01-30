<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('plantillas', function (Blueprint $table) {
            $table->id();
            $table->string('llave_corrida');
            $table->string('origen');
            $table->string('destino');
            $table->string('tipo');
            $table->string('capacidad');
            $table->tinyInteger('estatus')->default(1);
            $table->string('clase');
            $table->integer('hora');
            $table->integer('minutos');

            $table->unsignedBigInteger('id_autobus');
            $table->foreign('id_autobus')->references('id')->on('autobuses');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plantillas');
    }
};
