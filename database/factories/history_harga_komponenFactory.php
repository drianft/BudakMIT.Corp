<?php

namespace Database\Factories;

use App\Models\komponen;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class history_harga_komponenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'component_id' => komponen::factory(),
            'Harga_Acuan' => $this->faker->numberBetween(50000, 500000),
            'Tanggal_Berlaku' => $this->faker->date(),
            'Keterangan' => $this->faker->sentence(),
        ];
    }
}
