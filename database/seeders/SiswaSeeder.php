<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Kosongkan tabel dulu
        Siswa::truncate();

        // Data dummy siswa
        $siswas = [
            // Rombel XII RPL 1
            [
                'nama' => 'Ahmad Fauzi',
                'nis' => '2024001',
                'rombel' => 'XII RPL 1',
                'rayon' => 'Cicurug 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Budi Santoso',
                'nis' => '2024002',
                'rombel' => 'XII RPL 1',
                'rayon' => 'Cicurug 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Citra Dewi',
                'nis' => '2024003',
                'rombel' => 'XII RPL 1',
                'rayon' => 'Ciawi 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Dian Pratama',
                'nis' => '2024004',
                'rombel' => 'XII RPL 1',
                'rayon' => 'Ciawi 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Eko Wahyudi',
                'nis' => '2024005',
                'rombel' => 'XII RPL 1',
                'rayon' => 'Cisarua 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Rombel XII RPL 2
            [
                'nama' => 'Fajar Setiawan',
                'nis' => '2024006',
                'rombel' => 'XII RPL 2',
                'rayon' => 'Cicurug 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Gita Maharani',
                'nis' => '2024007',
                'rombel' => 'XII RPL 2',
                'rayon' => 'Cicurug 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Hadi Prasetyo',
                'nis' => '2024008',
                'rombel' => 'XII RPL 2',
                'rayon' => 'Ciawi 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Indah Permata',
                'nis' => '2024009',
                'rombel' => 'XII RPL 2',
                'rayon' => 'Ciawi 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Joko Susilo',
                'nis' => '2024010',
                'rombel' => 'XII RPL 2',
                'rayon' => 'Cisarua 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Rombel XI RPL 1
            [
                'nama' => 'Kartika Sari',
                'nis' => '2024011',
                'rombel' => 'XI RPL 1',
                'rayon' => 'Cicurug 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Lukman Hakim',
                'nis' => '2024012',
                'rombel' => 'XI RPL 1',
                'rayon' => 'Cicurug 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Maya Anggraini',
                'nis' => '2024013',
                'rombel' => 'XI RPL 1',
                'rayon' => 'Ciawi 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Nugroho Adi',
                'nis' => '2024014',
                'rombel' => 'XI RPL 1',
                'rayon' => 'Ciawi 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Oki Maulana',
                'nis' => '2024015',
                'rombel' => 'XI RPL 1',
                'rayon' => 'Cisarua 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Insert data ke database
        Siswa::insert($siswas);
        $this->command->info('✅ Data dummy siswa berhasil dibuat!');
    }
}
