<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Perfil extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'perfil';

    protected $fillable = [
        'nombre_perfil',
        'estatus',
        'deleted_at'
    ];
}
