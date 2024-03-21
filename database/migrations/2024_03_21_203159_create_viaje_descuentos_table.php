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
        Schema::create('viaje_descuentos', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('estatus')->default(1);
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('diario_c_id');
            $table->foreign('diario_c_id')->references('id')->on('diario_c');
            $table->unsignedBigInteger('descuentos_id');
            $table->foreign('descuentos_id')->references('id')->on('descuentos');
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('viaje_descuentos');
    }
};
