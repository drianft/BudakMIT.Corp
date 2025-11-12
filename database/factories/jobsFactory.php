<?php

namespace Database\Factories;

use App\Models\SuratPenawaran;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class jobsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'sp_id' => \App\Models\SuratPenawaran::inRandomOrder()->value('sp_id'),
            'Nama_Pekerjaan' => $this->faker->sentence(3),
            'Nama_Mesin' => $this->faker->word(),
            'Spesifikasi_Mesin' => $this->faker->text(50),
        ];
    }
}
