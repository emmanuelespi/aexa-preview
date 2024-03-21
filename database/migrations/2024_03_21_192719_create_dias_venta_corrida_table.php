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
        Schema::create('dias_venta_corrida', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('estatus')->default(1);
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('corridas_id');
            $table->foreign('corridas_id')->references('id')->on('corridas');
            $table->unsignedBigInteger('dia_id');
            $table->foreign('dia_id')->references('id')->on('dias_venta');
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dias_venta_corrida');
    }
};
