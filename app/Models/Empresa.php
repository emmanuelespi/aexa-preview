<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Empresa extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "empresa";

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
