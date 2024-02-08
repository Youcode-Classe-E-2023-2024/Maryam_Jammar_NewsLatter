<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        Permission::create(['name' => 'view template']);
        Permission::create(['name' => 'create template']);
        Permission::create(['name' => 'send template']);
        Permission::create(['name' => 'delete template']);

        Permission::create(['name' => 'view media']);
        Permission::create(['name' => 'upload media']);
        Permission::create(['name' => 'delete media']);
        Permission::create(['name' => 'assign role']);

    }
}
