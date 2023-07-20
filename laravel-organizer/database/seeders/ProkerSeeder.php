<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProkerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('prokers') -> insert([
            [
                'Proker_name' => 'Mangan sate',
                'status' => 'berjalan'
            ]
            ]);
    }
}
