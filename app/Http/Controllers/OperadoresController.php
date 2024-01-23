<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Operadores;

class OperadoresController extends Controller
{
    public function index()
    {
        $operadores = Operadores::all();
        return view('web.catalogos.cat_operadores', compact('operadores'));
    }
}
