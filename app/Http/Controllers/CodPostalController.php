<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\CodPostal;

class CodPostalController extends Controller
{
    //
    public function fillpostal($codigo)
    {
        $array = array();
        $postals=CodPostal::where('codigo',$codigo)->get();
        foreach ($postals as $postal) {
            # code...
            $array['asentamientos'][]=$postal->asenta;
            $array['estados']=$postal->estado;
            $array['municipios']=$postal->mnpio;
        }
        return response()->json($array);
    }
}
