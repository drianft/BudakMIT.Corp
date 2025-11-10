<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\Detail_pekerjaan;
use App\Models\History_harga_komponen;
use App\Models\Jobs;
use App\Models\Komponen;
use App\Models\Perusahaan;
use App\Models\SuratPenawaran;
use App\Models\Tagihan;
use Database\Factories\HistoryHargaKomponenFactory;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory(10)->create();
        Perusahaan::factory(10)->create();
        SuratPenawaran::factory(10)->create();
        jobs::factory(10)->create();
        komponen::factory(10)->create();
        history_harga_komponen::factory(10)->create();
        Detail_pekerjaan::factory(10)->create();
        Tagihan::factory(10)->create();
    }
}
