<?php

namespace App\Http\Controllers;

use App\Models\Pintura;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PinturaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Pintura::all();
        return view('paginas.indexProducto', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('paginas.createProducto');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $articulos = new Pintura();

        $articulos->nombre = $request->get('nombre');
        $articulos->descripcion = $request->get('desc');
        $articulos->precio = $request->get('precio');

        $articulos->save();

        return redirect('/pintura');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pintura $pintura)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pintura $pintura)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pintura $pintura)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pintura $pintura)
    {
        //
    }
}
