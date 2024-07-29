<?php

namespace Database\Seeders;

use App\Models\Galeri;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GaleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'id' => 1,
                'foto' => fake()->randomElement(
                    [
                        'foto/girl.png',
                        'foto/girl-2.png'
                    ]
                ),
                'judul' => 'Galeri 1',
                'keterangan' => '',
                'published_at' => now(),
            ],
            [
                'id' => 2,
                'foto' => fake()->randomElement(
                    [
                        'foto/girl.png',
                        'foto/girl-2.png'
                    ]
                ),
                'judul' => 'Galeri 2',
                'keterangan' => '',
                'published_at' => now(),
            ]
        ])->each(function ($collection) {
            Galeri::create($collection);
        });
    }
}