<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Archivo;
use Illuminate\Support\Facades\Storage;

class ArchivoController extends Controller
{
    public function store(Request $request)
    {
        foreach ($request->archivos as $archivo)
        {
            if($archivo->isValid())
            {
                $nombre_hash = $archivo->store('images');

                $registroArchivo = new Archivo();
                $registroArchivo->pintura_id = $request->pintura_id;
                $registroArchivo->nombre = $archivo->getClientOriginalName();
                $registroArchivo->nombre_hash = $nombre_hash;
                $registroArchivo->mime = $archivo->getClientMimeType();
                $registroArchivo->save();
            }
        }
        return redirect()->route('pintura.show',$request->pintura_id);
    }

    public function descargar(Archivo $archivo)
    {
        $header = ['Content-Type' => $archivo->mime];
        return Storage::download( $archivo->nombre, $archivo->nombre_hash, $header);

    }
}
