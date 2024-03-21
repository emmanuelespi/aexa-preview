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
        Schema::create('cliente', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 90);
            $table->string('ap_paterno', 120);
            $table->string('ap_materno', 120);
            $table->string('fecha_nacimiento', 40)->nullable();
            $table->string('telefono_celular', 12)->nullable();
            $table->string('rfc', 15)->nullable();
            $table->string('email', 150)->nullable();
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
        Schema::dropIfExists('cliente');
    }
};
