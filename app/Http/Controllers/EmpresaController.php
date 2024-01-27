<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empresas = Empresa::all();
        return view('web.catalogos.cat_empresas', compact('empresas'));
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
            'clave' => 'required',
            'nombre_empresa' => 'required',
            'razon_social' => 'required',
            'rfc' => 'required',
            'direccion_fiscal' => 'required',
            'num_interior' => 'required',
            'num_exterior' => 'required',
            'localidad' => 'required',
            'colonia' => 'required',
            'ciudad' => 'required',
            'estado' => 'required',
            'cp' => 'required',
            'pais' => 'required',
            'telefono' => 'required'
        ]);
        Empresa::create([
            'clave' => $request->input('clave'),
            'nombre' => $request->input('nombre_empresa'), 
            'razon_social' => $request->input('razon_social'), 
            'rfc' => $request->input('rfc'), 
            'direccion_fiscal' => $request->input('direccion_fiscal'), 
            'num_interior' => $request->input('num_interior'), 
            'num_exterior' => $request->input('num_exterior'), 
            'localidad' => $request->input('localidad'), 
            'colonia' => $request->input('colonia'), 
            'ciudad' => $request->input('ciudad'), 
            'estado' => $request->input('estado'),
            'cp' => $request->input('cp'),
            'pais' => $request->input('pais'), 
            'telefono' => $request->input('telefono'), 
            'estatus' => '1']);
        return redirect()->route('empresas.index');
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
