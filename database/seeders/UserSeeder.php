<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nama' => 'admin_desa',
            'username' => 'admin_desa',
            'email' => 'tebingrambutan@gmail.com',
            'password' => Hash::make('password')
        ]);
    }
}
