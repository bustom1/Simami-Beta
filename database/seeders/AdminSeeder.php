<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert(
            [
                'users_id' => 1,
                'agama' => 'islam',
                'pekerjaan' => 'Software Engineer',
                'jenis_kelamin' => 'laki - laki',
                'tempat_lahir' => 'Jakarta',
                'tanggal_lahir' => '1990-05-15',
            ],
            [
                'users_id' => 2,
                'agama' => 'katolik',
                'pekerjaan' => 'Teacher',
                'jenis_kelamin' => 'perempuan',
                'tempat_lahir' => 'Bandung',
                'tanggal_lahir' => '1985-10-20',
            ],
            [
                'users_id' => 3,
                'agama' => 'islam',
                'pekerjaan' => 'Network Adminstrator',
                'jenis_kelamin' => 'laki - laki',
                'tempat_lahir' => 'Jakarta',
                'tanggal_lahir' => '1970-05-15',
            ]
        );
    }
}
