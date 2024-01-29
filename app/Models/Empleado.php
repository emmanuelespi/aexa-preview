<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Empleado extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "empleados";

    protected $fillable = [
        'nombre_completo',
        'fecha_nacimiento',
        'direccion',
        'estado',
        'municipio',
        'colonia',
        'codigo_postal',
        'sexo',
        'telefono_celular',
        'email',
        'tipo_licencia',
        'numero_licencia',
        'rfc',
        'fecha_ingreso',
        'fecha_baja',
        'observaciones',
        'id_empresa',
        'deleted_at'
    ];
}
