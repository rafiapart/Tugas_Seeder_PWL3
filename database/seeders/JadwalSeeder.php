<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JadwalSeeder extends Seeder
{
    public function run()
    {
        DB::table('jadwal')->insert([
            [
                'kode_matakuliah' => 'MK001',
                'nidn' => 'D001',
                'kelas' => 'A',
                'hari' => 'Senin',
                'jam' => now()
            ],
            [
                'kode_matakuliah' => 'MK002',
                'nidn' => 'D002',
                'kelas' => 'B',
                'hari' => 'Selasa',
                'jam' => now()
            ],
        ]);
    }
}