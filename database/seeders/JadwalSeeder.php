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
                'tempat_ibadah' => 'Jadwal 1',
                'petugas_ibadah' => 'Jadwal 1',
                'pelayan_firman' => 'Jadwal 1',
                'doa_syafaat' => 'Jadwal 1',
                'doa_syukur' => 'Jadwal 1',
                'keterangan' => '',
                'published_at' => now(),
            ],
            [
                'id' => 2,
                'tempat_ibadah' => 'Jadwal 2',
                'petugas_ibadah' => 'Jadwal 2',
                'pelayan_firman' => 'Jadwal 2',
                'doa_syafaat' => 'Jadwal 2',
                'doa_syukur' => 'Jadwal 2',
                'keterangan' => '',
                'published_at' => now(),
            ],
            // [
            //     'id' => 2,
            //     'judul' => 'Jadwal 2',
            //     'keterangan' => '',
            //     'published_at' => now(),
            // ]
        ])->each(function ($collection) {
            Jadwal::create($collection);
        });
    }
}
