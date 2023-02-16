<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
