<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMuebleRequest;
use App\Http\Requests\UpdateMuebleRequest;
use App\Models\Fabricado;
use App\Models\Mueble;
use App\Models\Prefabricado;

class MuebleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $muebles = Mueble::with('muebleable')->get();

        return view('muebles.index', ['muebles' => $muebles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('muebles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMuebleRequest $request)
    {
        $mueble = new Mueble();
        $mueble->fill($request->validated());

        if ($request->tipo == 'fabricado')
        {
            $categoria = new Fabricado();
            $categoria->ancho = $request->ancho;
            $categoria->alto = $request->alto;
        }
        elseif ($request->tipo == 'prefabricado')
        {
            $categoria = new Prefabricado();
        }

        $categoria->save();
        $mueble->muebleable()->associate($categoria);
        $mueble->save();

        return redirect()->route('muebles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mueble $mueble)
    {
        return view('muebles.show', ['mueble' => $mueble]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mueble $mueble)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMuebleRequest $request, Mueble $mueble)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mueble $mueble)
    {
        $mueble->delete();
        return redirect()->route('muebles.index');
    }
}
