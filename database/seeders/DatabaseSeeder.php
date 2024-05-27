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
        //create users seeders
        DB::table('users')->insert(
            [
                'name' => 'users1',
                'email' => 'users1@mail.com',
                'alamat' => '1234 Silicon Valley, CphpA',
                'password' => Hash::make('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'users2',
                'email' => 'users2@mail.com',
                'alamat' => '9101 Eco Park, TX',
                'password' => Hash::make('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'users3',
                'email' => 'users3@mail.com',
                'alamat' => '1011 Knowledge Ave, MA',
                'password' => Hash::make('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        $this->call(
            [
                AdminSeeder::class,
            ]
        );
    }
}
