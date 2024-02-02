<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Terminal;

class TerminalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $terminales = Terminal::all();
        return view('web.catalogos.cat_terminales', compact('terminales'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'clave_terminal' => 'required',
            'num_terminal' => 'required',
            'abreviacion' => 'required',
            'latitud' => 'required',
            'longitud' => 'required',
            'mun_origen' => 'required',
            'nombre_terminal' => 'required',
            'pref_factura' => 'required'
        ]);
        Terminal::create([
            'clave' => $request->input('clave_terminal'),
            'numero' => $request->input('num_terminal'),
            'abreviacion' => $request->input('abreviacion'),
            'latitud' => $request->input('latitud'),
            'longitud' => $request->input('longitud'),
            'origen' => $request->input('mun_origen'),
            'nombre_terminal' => $request->input('nombre_terminal'),
            'prefijo_factura' => $request->input('pref_factura'),
            'estatus' => 1
        ]);
        return redirect()->route('terminales.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
