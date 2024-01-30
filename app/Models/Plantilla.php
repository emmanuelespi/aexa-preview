<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plantilla extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "plantillas";

    protected $fillable = [
        'llave_corrida',
        'origen',
        'destino',
        'tipo',
        'capacidad',
        'id_empresa',
        'deleted_at'
    ];
}
