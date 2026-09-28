<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nama' => 'patur',
            'email' => 'patur@temuin.com',
            'no_hp' => '081234567890',
            'password' => bcrypt('123123123'),
        ]);
    }
}
