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
        Schema::create('corridas', function (Blueprint $table) {
            $table->id();
            $table->string('terminal_venta', 40);
            $table->string('terminal_paso', 40);
            $table->tinyInteger('estatus')->default(1);
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('plantilla_viaje_id');
            $table->foreign('plantilla_viaje_id')->references('id')->on('plantilla_viaje');
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('corridas');
    }
};
