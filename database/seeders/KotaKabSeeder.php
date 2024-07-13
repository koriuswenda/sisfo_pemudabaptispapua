<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\KotaKab;

class KotaKabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'id' => 1,
                'kota_kab' => 'Kota Jayapura',
                'published_at' => now(),
            ],
            [
                'id' => 2,
                'kota_kab' => 'Kabupaten Jayapura',
                'published_at' => now(),
            ],
            [
                'id' => 3,
                'kota_kab' => 'Kabupaten Keerom',
                'published_at' => now(),
            ],
            [
                'id' => 4,
                'kota_kab' => 'Kabupaten Sarmi',
                'published_at' => now(),
            ],
            [
                'id' => 5,
                'kota_kab' => 'Kabupaten Jayawijaya',
                'published_at' => now(),
            ],
            [
                'id' => 6,
                'kota_kab' => 'Kabupaten Biak',
                'published_at' => now(),
            ],
            [
                'id' => 7,
                'kota_kab' => 'Kabupaten Lanny Jaya',
                'published_at' => now(),
            ],
            [
                'id' => 8,
                'kota_kab' => 'Kabupaten Intan Jaya',
                'published_at' => now(),
            ],
            [
                'id' => 9,
                'kota_kab' => 'Kota Sorong',
                'published_at' => now(),
            ],

        ])->each(function ($items) {
            KotaKab::create($items);
        });
    }
}
