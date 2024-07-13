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
                'wilayah_id' => 1, // lihat id kota/kab di WilayahSeeder
                'published_at' => now(),
            ],
            [
                'nama_gereja' => 'Nama Gereja 2',
                'wilayah_id' => 5, // lihat id kota/kab di WilayahSeeder
                'published_at' => now(),
            ],
            [
                'nama_gereja' => 'Nama Gereja 3',
                'wilayah_id' => 9, // lihat id kota/kab di WilayahSeeder
                'published_at' => now(),
            ],

        ])->each(function ($items) {
            Gereja::create($items);
        });
    }
}
