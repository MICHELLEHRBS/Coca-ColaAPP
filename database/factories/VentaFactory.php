<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Venta>
 */
class VentaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'bought_date' => $this->faker->date(),
            'numbe_venta' => $this->faker->text(20),
            'payment' => $this->faker->randomElement(['Efectivo', 'Tarjeta', 'QR']),
            'status' => $this->faker->randomElement(['Activo', 'Bloqueado']),
        ];
    }
}
