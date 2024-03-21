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
        Schema::create('taquilla_taquilleros', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('taquilla_id');
            $table->foreign('taquilla_id')->references('id')->on('taquilla');
            $table->unsignedBigInteger('taquillero_id');
            $table->foreign('taquillero_id')->references('id')->on('taquilleros');
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taquilla_taquilleros');
    }
};
