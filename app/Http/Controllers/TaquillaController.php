<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Taquilla;

class TaquillaController extends Controller
{
    public function index()
    {
        $taquillas =  Taquilla::all();
        return view('web.catalogos.cat_taquillas', compact('taquillas'));
    }
}
