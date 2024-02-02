<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Terminal extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "terminal";

    protected $fillable = [
        'clave',
        'numero',
        'abreviacion',
        'origen',
        'nombre_terminal',
        'longitud',
        'latitud',
        'prefijo_factura',
        'estatus',
        'deleted_at'
    ];

    public function taquillas()
    {
        return $this->hasMany(Taquilla::class,'id');
    }
}
