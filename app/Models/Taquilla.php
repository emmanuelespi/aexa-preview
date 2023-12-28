<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Taquilla extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'taquilla';

    protected $fillable = [
        'nombre_taquilla',
        'numero_taquilla',
        'abreviacion',
        'estatus',
        'id_terminal'
    ];

    public function terminal()
    {
        return $this->belongsTo(Terminal::class,'id');
    }
}
