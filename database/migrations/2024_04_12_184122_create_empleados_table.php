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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 90);
            $table->string('ap_paterno', 120);
            $table->string('ap_materno', 120);
            $table->string('fecha_nacimiento', 40);
            $table->string('telefono_celular', 12)->nullable();
            $table->string('curp', 25);
            $table->string('rfc', 15)->nullable();
            $table->string('fecha_alta_imss', 40)->nullable();
            $table->string('nss', 15)->nullable();
            $table->string('email', 150);
            $table->string('direccion', 180);
            $table->string('estado_civil', 20);
            $table->string('estado', 40);
            $table->string('municipio', 100);
            $table->string('codigo_postal', 10)->nullable();
            $table->string('sexo', 30);

            $table->string('puesto', 30);
            $table->string('codigo_empleado', 15)->nullable();
            $table->string('fecha_ingreso', 40)->nullable();
            $table->string('observaciones', 200);
            $table->tinyInteger('estatus')->default(1);
            $table->timestamps();
            $table->softDeletes();

            $table->unsignedBigInteger('perfil_id');
            $table->foreign('perfil_id')->references('id')->on('perfil');

            $table->unsignedBigInteger('puesto_id');
            $table->foreign('puesto_id')->references('id')->on('puestos');

            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
