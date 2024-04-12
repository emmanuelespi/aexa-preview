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
        Schema::create('asignacion_turnos_taq', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('estatus')->default(1);
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('taquillero_id');
            $table->foreign('taquillero_id')->references('id')->on('taquilleros');
            $table->unsignedBigInteger('turnos_taquillero_id');
            $table->foreign('turnos_taquillero_id')->references('id')->on('turnos_taquillero');
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asignacion_turnos_taq');
    }
};
