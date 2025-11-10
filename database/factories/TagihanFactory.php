<?php

namespace Database\Factories;

use App\Models\SuratPenawaran;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tagihan>
 */
class TagihanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'no_tag' => $this->faker->unique()->numerify('TAG-####'),
            'No_SP' => SuratPenawaran::factory(),
            'Status_Pembayaran' => $this->faker->randomElement(['pending','dibayar','telat','batal']),
            'Tenggat_Pembayaran' => $this->faker->date(),
        ];
    }
}
