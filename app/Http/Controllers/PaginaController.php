<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pintura;

class PaginaController extends Controller
{
    public function actualizaciones($version_id = null)
    {
        $versiones = [
            'version 1.0',
            'version 2.0',
            'version 3.0',
            'version 4.0',
            'version 5.0',
        ];
        
        if(!empty($version_id)) {
            $version = $versiones[$version_id];
        } else {
            $version = null;
        }
    
        return view('paginas.historico-actualizaciones', compact('versiones','version')); 
    }

    public function contacto()
    {
        return view('paginas.contacto');
    }

    public function recibeFormContacto(Request $request)
    {
        
        //Recibe información
        //Valida datos
        $request->validate([
            'nombre' => 'required|max:255|min:3',
            'correo' => ['required','email'],
            'mensaje' => 'required',
        ]);
        //Inserta en base de datos
        //Redirigirnos a otra página
    }

    public function precios($cupon_id = null)
    {
        $nombre_precio = 'Precios';

        $precios = [
            'basico' => 12,
            'intermedio' => 50,
            'premium' => 100,
        ];

        $cupon = 'Cupón Aplicado';

        return view('paginas.precios', compact('nombre_precio', 'precios', 'cupon'));
    }
}
