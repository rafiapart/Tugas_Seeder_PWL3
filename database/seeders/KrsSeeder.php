<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KrsSeeder extends Seeder
{
    public function run()
    {
        DB::table('krs')->insert([
            ['npm' => '230001', 'kode_matakuliah' => 'MK001'],
            ['npm' => '230002', 'kode_matakuliah' => 'MK002'],
        ]);
    }
}