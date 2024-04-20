<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'full_name' => 'Kaizem',
            'email' => 'kai@mail.com',
            'password' => Hash::make('12345'),
        ]);
        User::create([
            'full_name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('12345'),
        ]);

        User::factory(10)->create();
    }
}
