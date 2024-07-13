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
                'jenis_kelamin_id' => 1,
                'tempat_tanggal_lahir' => 'Beam, 23 Februari 2000',
                // 'email' => 'kk.wenda@gmail.com',
                'nomor_hp' => '081234567890',
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
                'jenis_kelamin_id' => 1,
                'tempat_tanggal_lahir' => 'Wamena, 16 Juni 1989',
                // 'email' => 'maria.jikwa@gmail.com',
                'nomor_hp' => '081209876543',
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
                'jenis_kelamin_id' => 1,
                'tempat_tanggal_lahir' => 'Keerom, 22 Mei 2001',
                // 'email' => 'maria.jikwa@gmail.com',
                'nomor_hp' => '081209876543',
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
                'jenis_kelamin_id' => 1,
                'tempat_tanggal_lahir' => 'Ninia,11 November 2002',
                // 'email' => 'maria.jikwa@gmail.com',
                'nomor_hp' => '081209876543',
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
                'jenis_kelamin_id' => 1,
                'tempat_tanggal_lahir' => 'Tiom,11 September 2002',
                // 'email' => 'maria.jikwa@gmail.com',
                'nomor_hp' => '081209876543',
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
            | Gereja : Gereja Baptis Kiwone
            | ============================================================
            */
            [
                'nama_depan' => 'Selvia',
                'nama_tengah' => 'Putuwati',
                'nama_belakang' => 'Yikwa',
                'jenis_kelamin_id' => 2,
                'tempat_tanggal_lahir' => 'Wamena, 05 Oktober 2000',
                // 'email' => 'maria.jikwa@gmail.com',
                'nomor_hp' => '081209876543',
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
            | Gereja : Gereja Baptis Waena
            | ============================================================
            */
            [
                'nama_depan' => 'Teranus',
                'nama_tengah' => 'Tera',
                'nama_belakang' => 'Kogoya',
                'jenis_kelamin_id' => 1,
                'tempat_tanggal_lahir' => 'Pirime, 05 November 1989',
                // 'email' => 'maria.jikwa@gmail.com',
                'nomor_hp' => '081209876543',
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
            | Gereja : Gereja Baptis Dawer Entrop
            | ============================================================
            */
            [
                'nama_depan' => 'Isak',
                'nama_tengah' => 'Ias',
                'nama_belakang' => 'Tabuni',
                'jenis_kelamin_id' => 1,
                'tempat_tanggal_lahir' => 'Tiom, 11 Januari 1999',
                // 'email' => 'maria.jikwa@gmail.com',
                'nomor_hp' => '081209876543',
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
            | Gereja : Gereja Baptis Bukit Zaitun Skaylend 
            | ============================================================
            */
            [
                'nama_depan' => 'Selrio',
                'nama_tengah' => '',
                'nama_belakang' => 'Morib',
                'jenis_kelamin_id' => 1,
                'tempat_tanggal_lahir' => 'Tiom, Agustus 2001',
                // 'email' => 'maria.jikwa@gmail.com',
                'nomor_hp' => '081209876543',
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
            | Gereja : Gereja Baptis Kamkey Tanah Hitam
            | ============================================================
            */
            [
                'nama_depan' => 'Sarah',
                'nama_tengah' => '',
                'nama_belakang' => 'Bosawer',
                'jenis_kelamin_id' => 2,
                'tempat_tanggal_lahir' => 'Sorong, 12 Maret 2000',
                // 'email' => 'maria.jikwa@gmail.com',
                'nomor_hp' => '081209876543',
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
            | Gereja : Gereja Baptis Baseg Pasir II
            | ============================================================
            */
            [
                'nama_depan' => 'Yesaya',
                'nama_tengah' => 'Yeko',
                'nama_belakang' => 'Kogoya',
                'jenis_kelamin_id' => 1,
                'tempat_tanggal_lahir' => 'Gamelia, 12 Juli 2000',
                // 'email' => 'maria.jikwa@gmail.com',
                'nomor_hp' => '081209876543',
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
            | Gereja : Gereja Baptis Baseg Pasir II
            | ============================================================
            */
            [
                'nama_depan' => 'Santi',
                'nama_tengah' => 'Olan',
                'nama_belakang' => 'Kogoya',
                'jenis_kelamin_id' => 2,
                'tempat_tanggal_lahir' => 'Tinume, 12 Maret 2002',
                // 'email' => 'maria.jikwa@gmail.com',
                'nomor_hp' => '081209876543',
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
            | Gereja : Gereja Baptis Waena
            | ============================================================
            */
            [
                'nama_depan' => 'Bominus',
                'nama_tengah' => 'Bowen',
                'nama_belakang' => 'Wenda',
                'jenis_kelamin_id' => 1,
                'tempat_tanggal_lahir' => 'Guna, 12 April 2001',
                // 'email' => 'maria.jikwa@gmail.com',
                'nomor_hp' => '081209876543',
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
            | Gereja : Gereja Baptis Waena
            | ============================================================
            */
            [
                'nama_depan' => 'Selinda',
                'nama_tengah' => '',
                'nama_belakang' => 'Wenda',
                'jenis_kelamin_id' => 2,
                'tempat_tanggal_lahir' => 'Guna, 12 Oktober 1999',
                // 'email' => 'maria.jikwa@gmail.com',
                'nomor_hp' => '081209876543',
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
            | Gereja : Gereja Baptis Kiwone
            | ============================================================
            */
            [
                'nama_depan' => 'Nipon',
                'nama_tengah' => 'Nikcy',
                'nama_belakang' => 'Wanimbo',
                'jenis_kelamin_id' => 1,
                'tempat_tanggal_lahir' => 'Indawan, 12 Oktober 2002',
                // 'email' => 'maria.jikwa@gmail.com',
                'nomor_hp' => '081209876543',
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
            | Gereja : Gereja Baptis Kiwone Padang Bulan
            | ============================================================
            */
            [
                'nama_depan' => 'Alua',
                'nama_tengah' => 'Robert',
                'nama_belakang' => 'Kogoya',
                'jenis_kelamin_id' => 1,
                'tempat_tanggal_lahir' => 'Lualo, 10 Juni 2003',
                // 'email' => 'maria.jikwa@gmail.com',
                'nomor_hp' => '081209876543',
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
            | Gereja : Gereja Baptis Kiwone Padang Bulan
            | ============================================================
            */
            [
                'nama_depan' => 'Hanna',
                'nama_tengah' => '',
                'nama_belakang' => 'Tabuni',
                'jenis_kelamin_id' => 2,
                'tempat_tanggal_lahir' => 'Wamena, 8 September 2003',
                // 'email' => 'maria.jikwa@gmail.com',
                'nomor_hp' => '081209876543',
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
            | Gereja : Gereja Baptis Mula-mula Santa Rosa
            | ============================================================
            */
            [
                'nama_depan' => 'Iman ',
                'nama_tengah' => '',
                'nama_belakang' => 'Wenda',
                'jenis_kelamin_id' => 1,
                'tempat_tanggal_lahir' => 'Beam, 12 Oktober 2001',
                // 'email' => 'maria.jikwa@gmail.com',
                'nomor_hp' => '081209876543',
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
            | Gereja : Gereja Baptis Kiwone
            | ============================================================
            */
            [
                'nama_depan' => 'Jules ',
                'nama_tengah' => 'Yulian',
                'nama_belakang' => 'Yikwa',
                'jenis_kelamin_id' => 1,
                'tempat_tanggal_lahir' => 'Muara, 22 Desember 2002',
                // 'email' => 'maria.jikwa@gmail.com',
                'nomor_hp' => '081209876543',
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
            | Gereja : Gereja Baptis Kiwone
            | ============================================================
            */
            [
                'nama_depan' => 'Dekinus ',
                'nama_tengah' => 'Deki',
                'nama_belakang' => 'Kogoya',
                'jenis_kelamin_id' => 1,
                'tempat_tanggal_lahir' => 'Kurugume, 12 Juli 2002',
                // 'email' => 'maria.jikwa@gmail.com',
                'nomor_hp' => '081209876543',
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
            | Gereja : Gereja Baptis Kiwone
            | ============================================================
            */
            [
                'nama_depan' => 'Ibrahim  ',
                'nama_tengah' => 'Ibra',
                'nama_belakang' => 'Kogoya',
                'jenis_kelamin_id' => 1,
                'tempat_tanggal_lahir' => 'Tinume, 22 Agustus 2001',
                // 'email' => 'maria.jikwa@gmail.com',
                'nomor_hp' => '081209876543',
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
            | Gereja : Gereja Baptis Cahaya Kasih
            | ============================================================
            */
            [
                'nama_depan' => 'Pingkan',
                'nama_tengah' => '',
                'nama_belakang' => 'Mokai',
                'jenis_kelamin_id' => 1,
                'tempat_tanggal_lahir' => 'Jayapura, 24 Mei 1999',
                // 'email' => 'maria.jikwa@gmail.com',
                'nomor_hp' => '081209876543',
                'gambar' => fake()->randomElement(
                    [
                        'avatars/girl.png',
                        'avatars/girl-2.png'
                    ]
                ),
                'gereja_id' => 1,
                'published_at' => now(),
            ],
            [
                'nama_depan' => 'Anis',
                'nama_tengah' => 'Olse',
                'nama_belakang' => 'Yikwa',
                'jenis_kelamin_id' => 1,
                'tempat_tanggal_lahir' => 'Wamena, 24 Mei 2003',
                // 'email' => 'maria.jikwa@gmail.com',
                'nomor_hp' => '081209876533',
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
