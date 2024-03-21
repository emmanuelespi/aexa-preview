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
        Schema::create('diario_c', function (Blueprint $table) {
            $table->id();
            $table->string('origen', 20);
            $table->string('destino', 20);
            $table->string('clase', 30);
            $table->string('tipo', 20);
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('corridas_id');
            $table->foreign('corridas_id')->references('id')->on('corridas');
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diario_c');
    }
};
