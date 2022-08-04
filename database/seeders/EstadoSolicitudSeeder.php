<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EstadoSolicitud;

class EstadoSolicitudSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        EstadoSolicitud::create([
            'nombre'=>'Iniciado'
        ]);
        EstadoSolicitud::create([
            'nombre'=>'Analisis'
        ]);
        EstadoSolicitud::create([
            'nombre'=>'Pendiente Documentación'
        ]);
        EstadoSolicitud::create([
            'nombre'=>'Aprobado'
        ]);
        EstadoSolicitud::create([
            'nombre'=>'Denegado'
        ]);

    }
}
