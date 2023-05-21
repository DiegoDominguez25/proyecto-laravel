<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Pintura;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Gate;

class PinturaController extends Controller
{

        public function __construct()
        {
            $this->middleware('auth');
        }

        // Para el gate, tuve que asignar el rol en la tabla usuarios
        // desde la base de datos, ya que no encontre manera en las
        // factories de crear usuarios con los roles al azar, pero funciona

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pinturas = Pintura::with('categoria')->get();
        return view('paginas.indexProducto', compact('pinturas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('paginas.createProducto', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:20|min:3',
            'descripcion' => ['required','max:30','min:5'],
            'precio' => 'required',
        ]);

        $pintura = new Pintura($request->all());

        $cate = Categoria::find($request->categoria_id);

        $cate->pinturas()->save($pintura);

        Alert::success('Registrado', 'El producto se ha guardado correctamente');
        return redirect()->route('pintura.index');
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
        Gate::authorize('administrador');

            return view('paginas.editProducto', compact('pintura'));



    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pintura $pintura)
    {
        $request->validate([
            'nombre' => 'required|max:20|min:3',
            'descripcion' => ['required','max:30','min:5'],
            'precio' => 'required',
        ]);

        $pintura->nombre = $request->nombre;
        $pintura->descripcion = $request->descripcion;
        $pintura->precio = $request->precio;

        $pintura->save();

        Alert::success('Guardado', 'Los cambios han sido guardados');
        return redirect()->route('pintura.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pintura $pintura)
    {
        Gate::authorize('administrador');
        $pintura->delete();
        Alert::success('Eliminado', 'Eliminado exitosamente');
        return redirect()->route('pintura.index');

    }
}
