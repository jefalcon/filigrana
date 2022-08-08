<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Models\ClienteResidencial;
use App\Models\SolicitudResidencial;
use Illuminate\Support\Facades\DB;


class AltaContactoResidencialController extends Controller
{
    //
    public function index(){

        return view('crearcontactoresidencial');

    }

    public function store(){

        
        // ClienteREsidencial::create([
        //     'nombre'=>$data['nombre'],
        //     'fx_nacimiento'=>$data['fx_nacimiento'],
        //     'documento'=>$data['documento'],
        //     'email'=>$data['email'],
        //     'telefono'=>$data['telefono'],
        //     'ingresos'=>$data['ingresos'],
        //     'antiguedad'=>$data['antiguedad'], 
        // ]);
        
        DB::transaction(function()
        {   
            $data=request()->all();
            $NuevoClienteResidencial = ClienteREsidencial::create([
                'nombre'=>$data['nombre'],
                'fx_nacimiento'=>$data['fx_nacimiento'],
                'documento'=>$data['documento'],
                'email'=>$data['email'],
                'telefono'=>$data['telefono'],
                'ingresos'=>$data['ingresos'],
                'antiguedad'=>$data['antiguedad'],    
            ]);
            
            $NuevaSolicitudResidencial = SolicitudResidencial::create([
                'cliente_id'=> $NuevoClienteResidencial->id,
                'estado_id'=>1,
                'descripcion'=>$data['descripcion'],
                'importe'=>$data['importe'],
                'meses'=>$data['plazo'],
                'cuota'=>$data['cuota'],
            ]);
            
        });

        return redirect()->route('home');

    }
}

    

