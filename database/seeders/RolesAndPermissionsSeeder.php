<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Create Roles
        $superuser = Role::create(['name' => 'superuser']);
        $admin = Role::create(['name' => 'admin']);
        $marketer = Role::create(['name' => 'marketer']);
        $dataEntry = Role::create(['name' => 'data-entry']);
        $tester = Role::create(['name' => 'tester']);
        
        // Create Permissions
        Permission::create(['name' => 'manage users']);
        Permission::create(['name' => 'manage products']);
        Permission::create(['name' => 'manage orders']);
        Permission::create(['name' => 'view reports']);
        Permission::create(['name' => 'manage accounting']);
        
        // Assign Permissions to Roles
        $superuser->givePermissionTo(Permission::all());
        $admin->givePermissionTo(['manage users', 'manage products', 'manage orders', 'view reports', 'manage accounting']);
        $marketer->givePermissionTo(['manage products', 'manage orders']);
        $dataEntry->givePermissionTo('manage products');
        $tester->givePermissionTo('view reports');
    }
}

