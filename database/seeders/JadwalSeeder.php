<?php

namespace Database\Seeders;

use App\Models\Jadwal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {        
        collect([
            [
                'id' => 1,
                'judul' => 'Jadwal 1',
                'keterangan' => '',
                'published_at' => now(),
            ],
            [
                'id' => 2,
                'judul' => 'Jadwal 2',
                'keterangan' => '',
                'published_at' => now(),
            ]
        ])->each(function ($collection) {
            Jadwal::create($collection);
        });
    }
}
