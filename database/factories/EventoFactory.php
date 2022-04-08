<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Evento>
 */
class EventoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'data' => $this->faker->date(),
            'nome' => $this->faker->name(),
            'horario_inicio' => $this->faker->time(),
            'horario_final' => $this->faker->time(),
            'tipo_evento' => $this->faker->word(),
            'email' => $this->faker->email(),
            'telefone' => $this->faker->tollFreePhoneNumber(),
            'qt_pessoas' => $this->faker->randomDigit(),
            
        ];
    }
}
