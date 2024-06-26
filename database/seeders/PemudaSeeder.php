<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pemuda;

class PemudaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        collect([
            
            /*
            | ============================================================
            | Gereja : Gereja Baptis Kiwone
            | ============================================================
            */ 
            [
                'nama_depan' => 'Korius',
                'nama_tengah' => 'Kussa',
                'nama_belakang' => 'Wenda',
                'jenis_kelamin' => 'Laki-Laki',
                'tempat_tanggal_lahir' => 'Beag, 23 Februari 2000',
                // 'email' => 'kk.wenda@gmail.com',
                'no_hp' => '081234567890',
                'gambar' => fake()->randomElement(
                    [
                        'avatars/man.png',
                        'avatars/man1.png',
                    ]
                ),
                'gereja_id' => 1,
                'published_at' => now(),
            ],
            [
                'nama_depan' => 'Maria',
                'nama_tengah' => '',
                'nama_belakang' => 'Jikwa',
                'jenis_kelamin' => 'Laki-Laki',
                'tempat_tanggal_lahir' => 'Beag, 23 Februari 2000',
                // 'email' => 'maria.jikwa@gmail.com',
                'no_hp' => '081209876543',
                'gambar' => fake()->randomElement(
                    [
                        'avatars/girl.png',
                        'avatars/girl-2.png'
                    ]
                ),
                'gereja_id' => 1,
                'published_at' => now(),
            ],

            /*
            | ============================================================
            | Gereja : Gereja Baptis Ujung Bumi
            | ============================================================
            */ 
            [
                'nama_depan' => 'Adam',
                'nama_tengah' => '',
                'nama_belakang' => 'Kogoya',
                'jenis_kelamin' => 'Laki-Laki',
                'tempat_tanggal_lahir' => '',
                // 'email' => 'maria.jikwa@gmail.com',
                'no_hp' => '081209876543',
                'gambar' => fake()->randomElement(
                    [
                        'avatars/girl.png',
                        'avatars/girl-2.png'
                    ]
                ),
                'gereja_id' => 1,
                'published_at' => now(),
            ],

            /*
            | ============================================================
            | Gereja : Gereja Baptis DKI Yahukimo
            | ============================================================
            */ 
            [
                'nama_depan' => 'Ansay',
                'nama_tengah' => '',
                'nama_belakang' => 'Yando',
                'jenis_kelamin' => 'Laki-Laki',
                'tempat_tanggal_lahir' => '',
                // 'email' => 'maria.jikwa@gmail.com',
                'no_hp' => '081209876543',
                'gambar' => fake()->randomElement(
                    [
                        'avatars/girl.png',
                        'avatars/girl-2.png'
                    ]
                ),
                'gereja_id' => 1,
                'published_at' => now(),
            ],


        ])->each(function ($items) {
            Pemuda::create($items);
        });
    }
}
