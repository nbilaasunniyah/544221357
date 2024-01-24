<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwayatPendidikanTable extends Migration
{
    public function up()
    {
        Schema::create('riwayat_pendidikan', function (Blueprint $table) {
            
            $table->string('nim');
            $table->string('nama_universitas');
            $table->string('program_studi');
            $table->string('jenjang_pendidikan');
            $table->year('tahun_masuk');
            $table->year('tahun_lulus');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('riwayat_pendidikan');
    }
}
