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
        Schema::create('mantenimiento_autobus', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_mantenimiento', 60);
            $table->string('fecha_ultimo_mantenimiento',20);
            $table->string('descripcion', 180);
            $table->tinyInteger('estatus')->default(1);
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
        Schema::dropIfExists('mantenimiento_autobus');
    }
};
