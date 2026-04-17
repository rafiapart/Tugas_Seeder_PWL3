<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    public function run()
    {
        DB::table('mahasiswa')->insert([
            ['npm' => '230001', 'nidn' => 'D001', 'nama' => 'Andi'],
            ['npm' => '230002', 'nidn' => 'D002', 'nama' => 'Rina'],
        ]);
    }
}