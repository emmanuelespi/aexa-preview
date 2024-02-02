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
        Schema::create('terminal', function (Blueprint $table) {
            $table->id();
            $table->integer('clave')->nullable();
            $table->integer('numero')->nullable();
            $table->string('abreviacion', 5);
            $table->string('origen', 20);
            $table->string('nombre_terminal', 25);
            $table->string('latitud',50);
            $table->string('longitud',50);
            $table->string('prefijo_factura',10);
            $table->tinyInteger('estatus')->default(1);
            $table->timestamps();
            $table->softDeletes();
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('terminal');
    }
};
