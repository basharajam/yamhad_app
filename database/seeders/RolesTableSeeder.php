<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        Role::create(['name' => 'superuser']);
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'marketer']);
        Role::create(['name' => 'data entry']);
        Role::create(['name' => 'tester']);
    }
}
