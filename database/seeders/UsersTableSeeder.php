<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Create Superuser
        $superuser = User::create([
            'name' => 'Super User',
            'email' => 'superuser@example.com',
            'password' => Hash::make('password123'),
        ]);
        $superuser->assignRole('superuser');

        // Create Admin
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password123'),
        ]);
        $admin->assignRole('admin');

        // Create Marketer
        $marketer = User::create([
            'name' => 'Marketer User',
            'email' => 'marketer@example.com',
            'password' => Hash::make('password123'),
        ]);
        $marketer->assignRole('marketer');

       
        // Since clients don't have specific permissions, we'll skip role assignment here.
    }
}


