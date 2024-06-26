<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->withPersonalTeam()->create();

        $this->call([

            // Datamaster
            PemudaSeeder::class,
            
            LokasiSeeder::class,
            JenisKelaminSeeder::class,
            AgamaSeeder::class,
            PangkatGolonganSeeder::class,
            SukuSeeder::class,
            DistrikSeeder::class,
            KelurahanSeeder::class,
            JabatanSeeder::class,
            DeskripsiTugasSeeder::class,
            KontrakSeeder::class,
            KontrakPegawaiSeeder::class,
            GelarDepanSeeder::class,
            GelarBelakangSeeder::class,
            GelarNonAkademisSeeder::class,
            JenjangPendidikanSeeder::class,
            StatusPerkawinanSeeder::class,
            BidangSeeder::class,
            TugasSeeder::class,
            DiklatSeeder::class,
            SertifikatKeahlianSeeder::class,

            //  Role
            RoleSeeder::class,
            // User
            UserSeeder::class,
            PegawaiSeeder::class,


       ]);
    }
}
