<?php

namespace Database\Seeders;

use App\Models\Kas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Kas::create([
            'jumlah' => 60000,
        ]);
    }
}
