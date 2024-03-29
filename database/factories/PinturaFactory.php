<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pintura>
 */
class PinturaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->name(),
            'descripcion' => $this->faker->paragraph(),
            'precio' => $this->faker->randomNumber(2, false),
            'categoria_id' => $this->faker->randomElement(['1','2','3']),
        ];
    }
}
