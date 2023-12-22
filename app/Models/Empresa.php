<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    protected $table = "empresas";

    protected $fillable = [
        'clave',
        'nombre',
        'razon_social',
        'rfc',
        'direccion_fiscal',
        'num_exterior',
        'num_interior',
        'localidad',
        'colonia',
        'ciudad',
        'estado',
        'pais',
        'cp',
        'telefono',
        'estatus'
    ];
}
