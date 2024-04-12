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
        Schema::create('operadores_autobus', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('estatus')->default(1);
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('operador_id');
            $table->foreign('operador_id')->references('id')->on('operadores');
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
        Schema::dropIfExists('operadores_autobus');
    }
};
