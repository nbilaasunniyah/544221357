<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Kontak_Darurat_Seeder extends Seeder
{
    public function run()
    {
        DB::table('kontak_darurat')->insert([
            'nim' => '123456',
            'nama_kontak_darurat' => 'Ibu sayang',
            'hubungan_dengan_kontak' => 'Ibu',
            'nomor_telepon_kontak' => '081234567890',
        ]);

    }
}
