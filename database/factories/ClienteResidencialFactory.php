<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteResidencialFactory extends Factory
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
            'nombre'=>$this->faker->name(),
            'fx_nacimiento'=>$this->faker->dateTime(),
            'documento'=>$this->faker->numerify('###-###-####'),
            'email'=>$this->faker->safeEmail(),
            'telefono'=>$this->faker->phoneNumber(),
            'ingresos'=>$this->faker->numberbetween(1000,150000),
            'antiguedad'=>$this->faker->numberbetween(1,10)
        ];
    }
}
