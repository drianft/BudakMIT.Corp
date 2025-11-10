<?php

namespace Database\Factories;

use App\Models\jobs;
use App\Models\komponen;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class detail_pekerjaanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'job_id' => jobs::factory(),
            'component_id' => komponen::factory(),
            'Qty' => $this->faker->numberBetween(1, 10),
            'Harga_Aktual' => $this->faker->numberBetween(50000, 500000),
        ];
    }
}
