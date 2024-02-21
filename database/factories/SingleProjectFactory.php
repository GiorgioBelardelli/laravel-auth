<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SingleProject>
 */
class SingleProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nome_progetto'=>fake()->word(),
            'desc_progetto'=>fake()->paragraph(2),
            'counter_vis'=>fake()->randomNumber(4)
        ];
    }
}
