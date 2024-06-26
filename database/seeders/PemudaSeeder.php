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
                'tempat_tanggal_lahir' => 'Beam, 23 Februari 2000',
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
                'nama_depan' => 'Ana',
                'nama_tengah' => 'Maria',
                'nama_belakang' => 'Jikwa',
                'jenis_kelamin' => 'Perempuan',
                'tempat_tanggal_lahir' => 'Wamena, 16 Juni 1989',
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
                'tempat_tanggal_lahir' => 'Keerom, 22 Mei 2001',
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
                'nama_depan' => 'Ansai',
                'nama_tengah' => '',
                'nama_belakang' => 'Yando',
                'jenis_kelamin' => 'Laki-Laki',
                'tempat_tanggal_lahir' => 'Ninia,11 November 2002',
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
            | Gereja : Gereja Baptis Yahim Sentani
            | ============================================================
            */
            [
                'nama_depan' => 'Weson',
                'nama_tengah' => 'Naimin',
                'nama_belakang' => 'Yigibalom',
                'jenis_kelamin' => 'Laki-Laki',
                'tempat_tanggal_lahir' => 'Tiom,11 September 2002',
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
            | Gereja : Gereja Baptis Yahim Sentani
            | ============================================================
            */
            [
                'nama_depan' => 'Selvia',
                'nama_tengah' => 'Putuwati',
                'nama_belakang' => 'Yikwa',
                'jenis_kelamin' => 'Perempuan',
                'tempat_tanggal_lahir' => 'Wamena, 05 Oktober 2000',
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
