<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Wilayah;

class WilayahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        collect([
            [
                'nama_wilayah' => 'Nama Wilayah 1',
                'kode_wilayah' => '12345',
                'published_at' => now(),
            ],
            [
                'nama_wilayah' => 'Nama Wilayah 2',
                'kode_wilayah' => '2324',
                'published_at' => now(),
            ],

        ])->each(function ($items) {
            Wilayah::create($items);
        });
    }
}
