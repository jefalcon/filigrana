<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\EstadoSolicitud;
use App\Models\ClienteEmpresa;

class SolicitudEmpresaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'cliente_id' => ClienteEmpresa::inrandomorder()->first()->id,
            'estado_id' => EstadoSolicitud::inrandomorder()->first()->id,
            'descripcion' => $this->faker->text(),
            'importe' => $this->faker->numberbetween(1000, 300000),
            'meses' => $this->faker->numberbetween(6, 60),
        ];
    }
}


