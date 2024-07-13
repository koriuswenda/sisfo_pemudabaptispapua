<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gereja;

class GerejaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'nama_gereja' => 'Nama Gereja 1',
                'kota_kab_id' => 1, // lihat id kota/kab di KotaKabSeeder
                'published_at' => now(),
            ],
            [
                'nama_gereja' => 'Nama Gereja 2',
                'kota_kab_id' => 5, // lihat id kota/kab di KotaKabSeeder
                'published_at' => now(),
            ],
            [
                'nama_gereja' => 'Nama Gereja 3',
                'kota_kab_id' => 9, // lihat id kota/kab di KotaKabSeeder
                'published_at' => now(),
            ],

        ])->each(function ($items) {
            Gereja::create($items);
        });
    }
}
