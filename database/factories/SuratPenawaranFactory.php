<?php

namespace Database\Factories;

use App\Models\SuratPenawaran;
use App\Models\User;
use App\Models\Perusahaan;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class SuratPenawaranFactory extends Factory
{
    protected $model = SuratPenawaran::class; // FIX

    public function definition(): array
    {
            // Ambil nomor terakhir
        $last = SuratPenawaran::orderBy('sp_id', 'desc')->value('no_sp');

        // Jika belum ada data, mulai dari 1
        $number = $last ? ((int) str_replace('SP-', '', $last)) + 1 : 1;

        return [
            
            'no_sp' => 'SP-' . str_pad($number, 4, '0', STR_PAD_LEFT),
            'user_id' => User::factory(),
            'Company_id' => Perusahaan::factory(),
            'Tanggal_Surat_Penawaran' => $this->faker->date(),
            'Perihal' => $this->faker->sentence(),
        ];
    }
}
