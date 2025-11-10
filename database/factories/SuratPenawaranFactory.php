<?php

namespace Database\Factories;

use App\Models\SuratPenawaran;
use App\Models\User;
use App\Models\Perusahaan;
use Illuminate\Database\Eloquent\Factories\Factory;

class SuratPenawaranFactory extends Factory
{
    protected $model = SuratPenawaran::class; // FIX

    public function definition(): array
    {
        return [
            'no_sp' => 'SP-' . $this->faker->unique()->numerify('####'),
            'user_id' => User::factory(),
            'Company_id' => Perusahaan::factory(),
            'Tanggal_Surat_Penawaran' => $this->faker->date(),
            'Perihal' => $this->faker->sentence(),
        ];
    }
}
