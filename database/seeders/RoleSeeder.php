<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $admin = Role::create(['name' => 'admin']);
        $garita = Role::create(['name' => 'garita']);

        Permission::create(['name' => 'user.login'])->syncRoles([$admin, $garita]);
        Permission::create(['name' => 'user.registro'])->syncRoles([$admin]);
        Permission::create(['name' => 'user.lagout'])->syncRoles([$admin, $garita]);
    }
}
