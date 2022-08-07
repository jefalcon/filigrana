<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClienteResidencial;
use App\Models\SolicitudResidencial;


class AltaContactoResidencialController extends Controller
{
    //
    public function index(){

        return view('crearcontactoresidencial');

    }

    public function store(){

        $data=request()->all();
        ClienteREsidencial::create([
            'nombre'=>$data['nombre'],
            'fx_nacimiento'=>$data['fx_nacimiento'],
            'documento'=>$data['documento'],
            'telefono'=>$data['telefono'],
            'ingresos'=>$data['ingresos'],
            'antiguedad'=>$data['antiguedad'], 
        ]);
        
        return redirect()->route('home');

    }
}
