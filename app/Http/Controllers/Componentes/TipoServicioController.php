<?php

namespace App\Http\Controllers\Componentes;
use App\Http\Requests\componentes\TipoServicioRequest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\default\TipoServicio;

class TipoServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tiposervicio = TipoServicio::all();
        return view('tiposervicio.index', compact('tiposervicio'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tiposervicio.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TipoServicioRequest $request)
    {
        TipoServicio::create($request->validated());
        return redirect()->route('admin.tiposervicio.index')->with('success', 'Creado correctamente');

    }

    /**
     * Display the specified resource.
     */
    public function show(TipoServicio $tiposervicio)
    {
        return view('tiposervicio.show', compact('tiposervicio'));
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
