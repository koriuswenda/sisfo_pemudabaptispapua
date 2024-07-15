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
            WilayahSeeder::class,
            GerejaSeeder::class,
            PengumumanSeeder::class,
            KotaKabSeeder::class,

            //  Role
            RoleSeeder::class,
            
            // User
            UserSeeder::class,


       ]);
    }
}
