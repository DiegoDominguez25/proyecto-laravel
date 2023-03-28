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
        $pinturas = Pintura::get();
        return view('paginas.indexProducto', compact('pinturas'));
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

        $request->validate([
            'nombre' => 'required|max:255|min:3',
            'desc' => ['required'],
            'precio' => 'required',
        ]);

        $articulos = new Pintura();

        $articulos->nombre = $request->nombre;
        $articulos->descripcion = $request->desc;
        $articulos->precio = $request->precio;

        $articulos->save();

        return redirect('/pintura');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pintura $pintura)
    {
        return view('paginas.showProducto', compact('pintura'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Pintura $pintura)
    {
        return view('paginas.editProducto', compact('pintura'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pintura $pintura)
    {
        $request->validate([
            'nombre' => 'required|max:255|min:3',
            'desc' => ['required'],
            'precio' => 'required',
        ]);

        $pintura->nombre = $request->nombre;
        $pintura->descripcion = $request->desc;
        $pintura->precio = $request->precio;

        $pintura->save();

        return redirect('/pintura');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pintura $pintura)
    {
        $pintura->delete();
        return redirect()->route('pintura.index');
    }
}
