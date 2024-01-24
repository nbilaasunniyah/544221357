<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Aktivitas_Alumni_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Aktivitas_Alumni')->insert([
            'nim' => '123456',
            'partisipasi_kegiatan' => 'Reuni Alumni',
            'tanggal_kegiatan' => '2022-01-01',
            'deskripsi_kegiatan' => 'Reuni tahunan untuk para alumni'
        ]);
    }
}
