<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        // role: adminmaster
        $permission1 = Permission::create(['name' => 'edit']);
        $permission2 = Permission::create(['name' => 'delete']);
        $permission3 = Permission::create(['name' => 'view']);
        $role1 = Role::create([
            'id' => 1,
            'name' => 'adminmaster',
            'keterangan' => 'hak akses sebagai Admin Master'
        ]);
        $role1->givePermissionTo($permission1);
        $permission1->assignRole($role1);
        $role1->givePermissionTo($permission2);
        $permission2->assignRole($role1);
        $role1->givePermissionTo($permission3);
        $permission3->assignRole($role1);

        // role: operatorsinode
        $role4 = Role::create([
            'id' => 4,
            'name' => 'operatorsinode',
            'keterangan' => 'Hak akses sebagai Operator Sinode'
        ]);
        $role4->givePermissionTo($permission3);
        $permission3->assignRole($role4);

        // role: operatorwilayah
        $role5 = Role::create([
            'id' => 5,
            'name' => 'operatorwilayah',
            'keterangan' => 'Hak akses sebagai Operator Wilayah'
        ]);
        $role5->givePermissionTo($permission3);
        $permission3->assignRole($role5);

        // role: operatorgereja
        $role6 = Role::create([
            'id' => 6,
            'name' => 'operatorgereja',
            'keterangan' => 'Hak akses sebagai Operator Gereja'
        ]);
        $role6->givePermissionTo($permission3);
        $permission3->assignRole($role6);

    }
}
