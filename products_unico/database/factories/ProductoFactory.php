<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nombre' => $this->faker->company,
            'Precio' => $this->faker->randomFloat(2, 0, 1),
            'Descripcion' => $this->faker->paragraph,
            'Imagen' => $this->faker->word,
        ];
    }
}
