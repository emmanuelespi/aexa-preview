<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perfil;
use Illuminate\Support\Facades\View;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $perfiles = Perfil::orderBy('created_at','desc')->get();
        foreach ($perfiles as $perfil) {
            switch ($perfil->estatus) {
                case 1:
                    $perfil->badgeClass = 'badge badge-success';
                    $perfil->text = "Activo";
                    break;
                case 2:
                    $perfil->badgeClass = 'badge badge-secondary';
                    $perfil->text = "Inactivo";
                    break;
                case 0:
                    $perfil->badgeClass = 'badge badge-danger';
                    $perfil->text = "Eliminado";
                default:
                    break;
            }
        }
        return view('web.catalogos.cat_perfiles', compact('perfiles'));
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
        $validatedData = $request->validate([
            'nombre_perfil' => 'required|max:20'
        ]);

        $perfil = Perfil::create([
            'nombre_perfil' => $validatedData['nombre_perfil'],
            'estatus' => true
        ]);

        return response()->json($perfil);

        //return redirect()->route('perfil.index');
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
