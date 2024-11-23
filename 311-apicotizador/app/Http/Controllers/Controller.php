<?php

namespace App\Http\Controllers;
use App\Models\Svg;
use App\Utils\Errores;

abstract class Controller
{
    public function getSvgUrl($svg_id) : string {
        if($svg_id != null) {
            $svg = Svg::select('path')->where('id_svg',$svg_id)->first();
            return $svg->path;
        }
        return null;
    }

    public function respuesta($data, $http_response) {
        return response()->json([
            'error' => false,
            'data' => $data,
        ], $http_response);
    }

    public function error($code_error, $http_response) {
        return response()->json([
            'error' => true,
            'message' => Errores::$messages[$code_error],
        ], $http_response);
    }
}
