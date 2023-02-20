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
        return view('paginas.producto');
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
    public function store(Request $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pintura $pintura): Response
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pintura $pintura): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pintura $pintura): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pintura $pintura): RedirectResponse
    {
        //
    }
}
