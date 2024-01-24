<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlumniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('alumni')->insert([
                'name' => 'John Doe',
                'nim' => '123456',
                'tanggal_lahir' => '1990-01-01',
                'alamat' => 'Jl. Contoh No. 123',
                'email' => 'john.doe@example.com',
                'nomor_telepon' => '081234567890',
                'tahun_lulus' => '2014',
                'gelar' => 'Sarjana Teknik',
                'jurusan' => 'Sarjana Teknik'
        ]);
    }
}
