<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto;

class CotizadorController extends Controller
{
    #region [Método index]
        #Desc: Método que carga la información principal de la página pública 
        public function index(Request $request) {
            $proyecto = Proyecto::select('nombre_proyecto')
            ->where('empresa_id',$request->empresa_id)
            ->with('fase')
            ->first();

            return response()->json([
                'proyecto' => $proyecto->nombre_proyecto,
                'svg' => $this->getSvgUrl($proyecto->svg_id),
                'fases' => $proyecto->fase->map(function($fase) {
                    return [
                        'id_fase' => $fase->id_fase,
                        'nombre_fase' => $fase->nombre_fase,
                        'tipo_fase' => $fase->tipo_fase,
                        'no_fase' => $fase->no_fase,
                        'svg' => $this->getSvgUrl($fase->svg_id)
                    ];                 
                })
            ]);
        }
    #endregion
}
