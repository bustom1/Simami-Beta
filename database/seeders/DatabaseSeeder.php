<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

    public function run(): void
    {
        // membuat seeder pengguna
        DB::table('users')->insert([
            [
                'name' => 'admin1',
                'email' => 'admin1@mail.com',
                'alamat' => '1234 Silicon Valley, CA',
                'password' => Hash::make('password123'),
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'perusahaan1',
                'email' => 'perusahaan1@mail.com',
                'alamat' => '9101 Eco Park, TX',
                'password' => Hash::make('password123'),
                'role' => 'perusahaan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'admin2',
                'email' => 'admin2@mail.com',
                'alamat' => '1011 Knowledge Ave, MA',
                'password' => Hash::make('password123'),
                'role' => 'perusahaan',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        $this->call([
            AdminSeeder::class,
        ]);
    }
}
