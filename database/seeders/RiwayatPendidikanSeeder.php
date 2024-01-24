<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RiwayatPendidikanSeeder extends Seeder
{
    public function run()
    {
        // Data dummy pertama
        DB::table('riwayat_pendidikan')->insert([
            'nim' => '123456',
            'nama_universitas' => 'Universitas Contoh',
            'program_studi' => 'Magister Ilmu Komputer',
            'jenjang_pendidikan' => 'S2',
            'tahun_masuk' => '2014',
            'tahun_lulus' => '2016',
        ]);

        // Data dummy kedua
        DB::table('riwayat_pendidikan')->insert([
            'nim' => '123456',
            'nama_universitas' => 'Universitas Lain',
            'program_studi' => 'Sistem Informasi',
            'jenjang_pendidikan' => 'S1',
            'tahun_masuk' => '2010',
            'tahun_lulus' => '2014',
        ]);

        // Tambahkan data dummy lainnya sesuai kebutuhan
    }
}
