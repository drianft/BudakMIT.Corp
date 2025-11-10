<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Komponen>
 */
class komponenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Nama_Component' => $this->faker->word(),
            'Nama_Satuan' => $this->faker->randomElement(['pcs', 'meter', 'litre']),
        ];
    }
}
