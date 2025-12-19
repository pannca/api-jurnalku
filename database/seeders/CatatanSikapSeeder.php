<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CatatanSikap;

class CatatanSikapSeeder extends Seeder
{
    public function run(): void
    {
        CatatanSikap::insert([
            [
                'siswa_nama' => 'Panca Prasetia',
                'kategori' => 'Disiplin',
                'catatan' => 'Datang terlambat ke sekolah',
                'status' => 'dalam_perbaikan',
                'dilaporkan' => '2025-12-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'siswa_nama' => 'Panca Prasetia',
                'kategori' => 'Sikap',
                'catatan' => 'Berbicara sopan kepada guru',
                'status' => 'sudah_berubah',
                'dilaporkan' => '2025-12-05',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
