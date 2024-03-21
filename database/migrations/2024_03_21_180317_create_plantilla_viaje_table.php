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
        Schema::create('plantilla_viaje', function (Blueprint $table) {
            $table->id();
            $table->string('origen');
            $table->string('destino');
            $table->string('clase');
            $table->string('tipo');
            $table->integer('capacidad_max');
            $table->integer('duracion_viaje_min_totales');
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('autobus_id');
            $table->foreign('autobus_id')->references('id')->on('autobus');
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plantilla_viaje');
    }
};
