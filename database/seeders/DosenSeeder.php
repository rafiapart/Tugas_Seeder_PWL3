<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DosenSeeder extends Seeder
{
    public function run()
    {
        DB::table('dosen')->insert([
            ['nidn' => 'D001', 'nama' => 'Dr. Budi'],
            ['nidn' => 'D002', 'nama' => 'Dr. Siti'],
        ]);
    }
}