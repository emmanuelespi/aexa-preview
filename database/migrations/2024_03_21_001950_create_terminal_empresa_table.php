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
        Schema::create('terminal_empresa', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('terminal_id');
            $table->foreign('terminal_id')->references('id')->on('terminal');
            $table->unsignedBigInteger('id_empresa');
            $table->foreign('id_empresa')->references('id')->on('empresa');
            $table->tinyInteger('estatus')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('terminal_empresa');
    }
};
