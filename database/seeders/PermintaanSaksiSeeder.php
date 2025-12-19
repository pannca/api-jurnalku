<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PermintaanSaksi;

class PermintaanSaksiSeeder extends Seeder
{
    public function run(): void
    {
        PermintaanSaksi::create([
            'pengirim' => 'Panca Prasetia',
            'tanggal' => '2025-01-10',
            'konfirmasi' => 'pending',
        ]);

        PermintaanSaksi::create([
            'pengirim' => 'Ahmad Fauzi',
            'tanggal' => '2025-01-11',
            'konfirmasi' => 'diterima',
        ]);

        PermintaanSaksi::create([
            'pengirim' => 'Siti Aisyah',
            'tanggal' => '2025-01-12',
            'konfirmasi' => 'ditolak',
        ]);
    }
}
