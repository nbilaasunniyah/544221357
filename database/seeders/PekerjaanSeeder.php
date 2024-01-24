<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PekerjaanSeeder extends Seeder
{
    public function run()
    {
        DB::table('pekerjaan')->insert([
            'nim' => '123456',
            'nama_perusahaan' => 'Perusahaan Contoh',
            'jabatan' => 'Programmer',
            'tanggal_mulai' => '2016-01-01',
            'tanggal_berakhir' => '2020-12-31',
        ]);

    }
}
