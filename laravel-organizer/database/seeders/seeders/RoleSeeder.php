<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([[
            'Roles' => 'ketua'
        ],
        [
            'Roles' => 'anggota'
        ],
        [
            'Roles' => 'bendahara'
        ],
        ]);
    }
}
