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
        Schema::create('asignacion_asientos', function (Blueprint $table) {
            $table->id();
            $table->integer('num_asiento');
            $table->enum('estatus',['disponible','ocupado','reservado','no disponible']);
            $table->string('terminal_venta');
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('corrida_id');
            $table->foreign('corrida_id')->references('id')->on('corridas');
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asignacion_asientos');
    }
};
