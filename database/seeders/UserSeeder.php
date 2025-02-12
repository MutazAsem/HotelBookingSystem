<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Mutaz',
            'last_name' => 'Asem',
            'email' => 'mu@gmail.com',
            'password' => Hash::make('m12345678'),
            'phone' => '774743134',
            'gender' => 'male',
            'status' => true,
        ]);
        
        User::create([
            'name' => 'Abod',
            'last_name' => 'alwosabi',
            'email' => 'admin@admin.com',
            'password' => Hash::make('12345678'),
            'phone' => '123456789',
            'gender' => 'male',
            'status' => true,
        ]);
    }
}
