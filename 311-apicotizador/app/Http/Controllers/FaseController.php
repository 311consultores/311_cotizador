<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Fase;
use Log;

class FaseController extends Controller
{
    public function create(Request $request) {
        try {
            $request->validate([
                'proyecto_id' => 'required|numeric',
                'svg_id' => 'nullable|numeric',
                'nombre_fase' => 'required|string|max:300',
                'tipo_fase' => 'required|string|max:300',
                'no_fase' => 'nullable|numeric',
                'orden' => 'nullable|numeric',
            ]);

            $fase = $request->all();
            $fase["fecha_creacion"] = date('Y-m-d');
            $fase["activo"] = 1;

            DB::transaction(function() use ($fase) {
                Fase::create($fase);
            });

            return $this->respuesta("La fase ha sido guardado correctamente",200);
        } catch(\PdoException | \Error | \Exception $e) {
            return $this->error('FAS-00G',400);
        }
    }
}
