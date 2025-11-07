<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Productos>
 */
class ProductosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->word(),
            'precio' => fake()->randomFloat(2, 1.00, 100.00),
            'idcategoria' => fake()->numberBetween(1,10),
            'idproveedor' => fake()->numberBetween(1,20),
        ];
    }
}
