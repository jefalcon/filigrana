<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteEmpresaFactory extends Factory
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
            'razon_social'=>$this->faker->company(),
            'documento'=>$this->faker->numerify('###-###-####'),
            'persona_contacto'=>$this->faker->name(),
            'cargo'=>$this->faker->text(9),
            'email'=>$this->faker->safeEmail(),
            'telefono'=>$this->faker->phoneNumber(),
            'ingreso_anual'=>$this->faker->numberbetween(1000000,100000000),
            'tiempo_actividad'=>$this->faker->numberbetween(1,100)
        ];
    }
}

