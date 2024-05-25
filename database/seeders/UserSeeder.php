<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class UserSeeder extends Seeder
{
    public function run(): void
    {
        // adminmaster
        $adminmaster =  User::create([
            'username' => 'adminmaster',
            'password' => bcrypt('adminmaster'),
        ]);
        $adminmaster->assignRole('adminmaster');

        // operatorsinode
        $operatorsinode =  User::create([
            'username' => 'operatorsinode',
            'password' => bcrypt('operatorsinode'),
        ]);
        $operatorsinode->assignRole('operatorsinode');

        // operatorwilayah
        $operatorwilayah =  User::create([
            'username' => 'operatorwilayah',
            'password' => bcrypt('operatorwilayah'),
        ]);
        $operatorwilayah->assignRole('operatorwilayah');

        // operatorgereja
        $operatorgereja =  User::create([
            'username' => 'operatorgereja',
            'password' => bcrypt('operatorgereja'),
        ]);
        $operatorgereja->assignRole('operatorgereja');

    }
}
