<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /******
     * @return void
     */

    public function run()
    {
        $roleAdmin = Role::firstOrCreate(['name' => 'admin']);
        $permissionAdmin = Permission::where('name', 'assign role')->first();

        $roleAdmin->givePermissionTo($permissionAdmin);

        $editorRole = Role::firstOrCreate(['name' => 'editor']);

        $permissionEditor1 = Permission::where('name', 'create template')->first();
        $permissionEditor2 = Permission::where('name', 'update template')->first();
        $permissionEditor3 = Permission::where('name', 'send template')->first();
        $permissionEditor4 = Permission::where('name', 'delete template')->first();

        $permissionEditor5 = Permission::where('name', 'upload media')->first();
        $permissionEditor6 = Permission::where('name', 'delete media')->first();
        $permissionEditor7 = Permission::where('name', 'assign role')->first();


        $editorRole->givePermissionTo([
            $permissionEditor1,
            $permissionEditor2,
            $permissionEditor3,
            $permissionEditor4,
            $permissionEditor5,
            $permissionEditor6,
            $permissionEditor7,
        ]);
    }
}
