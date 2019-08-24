<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonasController extends Controller
{
    public function obtenerPersonas(Request $request){
        if($request->ajax()){

            
        }else{
            return view('index');
        }
    }

    public function guardarPersonas(Request $request){
        if($request->ajax()){

            
        }else{
            return view('index');
        }
    }

    public function actualizarPersonas(Request $request){
        if($request->ajax()){

            
        }else{
            return view('index');
        }
    }

    public function eliminarPersonas(Request $request){
        if($request->ajax()){

            
        }else{
            return view('index');
        }
    }

    //
}
