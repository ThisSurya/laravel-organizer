<?php

namespace Database\Seeders;

use App\Models\CatatanKas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CatatanKasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CatatanKas::create([
            'jenis' => 'pendapatan',
            'jumlah' => 60000,
            'deskripsi' => 'donasi saweria',
        ]);
    }
}
