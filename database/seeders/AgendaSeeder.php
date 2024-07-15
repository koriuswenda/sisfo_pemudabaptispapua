<?php

namespace Database\Seeders;

use App\Models\Agenda;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AgendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {        
        collect([
            [
                'id' => 1,
                'judul' => 'Agenda 1',
                'keterangan' => '',
                'published_at' => now(),
            ],
            [
                'id' => 2,
                'judul' => 'Agenda 2',
                'keterangan' => '',
                'published_at' => now(),
            ]
        ])->each(function ($collection) {
            Agenda::create($collection);
        });
    }
}
