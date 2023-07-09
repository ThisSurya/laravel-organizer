<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
                [
                    'name' => 'Andi',
                    'email' => 'andi@example.com',
                    'password' => Hash::make('testingpassword'),
                    'role_id' => 1,
                ],
                [
                    'name' => 'Budi',
                    'email' => 'Budi@example.com',
                    'password' => Hash::make('testingpassword'),
                    'role_id' => 2,
                ]
            ]
        );
    }
}
