<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\EstadoSolicitud;
use App\Models\ClienteResidencial;

class SolicitudResidencialFactory extends Factory
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
        'cliente_id'=>ClienteResidencial::inrandomorder()->first()->id,
        'estado_id'=>EstadoSolicitud::inrandomorder()->first()->id,
        'descripcion'=>$this->faker->text(),
        'importe'=>$this->faker->numberbetween(1000,15000),
        'meses'=>$this->faker->numberbetween(6,60),
        'cuota'=>$this->faker->numerify('########.##'),

        ];
    }
}
