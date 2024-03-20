<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perfil;
use Illuminate\Support\Facades\View;
use JeroenNoten\LaravelAdminLte\View\Components\Tool\Datatable;

use function Livewire\of;
use function Pest\Laravel\json;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $perfiles = Perfil::select('id','nombre_perfil','estatus')->get();
        foreach ($perfiles as $perfil) {
            switch ($perfil->estatus) {
                case 1:
                    $perfil->estatus = '<span class="badge badge-success">Activo</span>';
                    break;
                case 2:
                    $perfil->estatus = '<span class="badge badge-secondary">Inactivo</span>';
                    break;
                case 0:
                    $perfil->badgeClass = '<span class="badge badge-secondary">Eliminado</span>';
                    break;
                default:
                    break;
            }
        }
        return view('web.catalogos.cat_perfiles', compact('perfiles'));
    }

    public function obtenerDatos()
    {
        $perfiles = Perfil::select('id','nombre_perfil','estatus')->get();
        foreach($perfiles as $perfil){
            switch ($perfil->estatus) {
                case 1:
                    $perfil->estatus = '<span class="badge badge-success">Activo</span>';
                    break;
                case 2:
                    $perfil->estatus = '<span class="badge badge-secondary">Inactivo</span>';
                    break;
                case 0:
                    $perfil->badgeClass = '<span class="badge badge-secondary">Eliminado</span>';
                    break;
                default:
                    break;
            }
        }
        return response()->json($perfiles);
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
        ]);

        return response()->json([
            'estatus' => 'true',
            'message' => 'Registro almacenado correctamente'
        ], 200);
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
