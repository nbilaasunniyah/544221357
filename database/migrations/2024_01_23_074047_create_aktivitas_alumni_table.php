<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAktivitasAlumniTable extends Migration
{
    public function up()
    {
        Schema::create('aktivitas_alumni', function (Blueprint $table) {
            
            $table->string('nim');
            $table->string('partisipasi_kegiatan');
            $table->date('tanggal_kegiatan');
            $table->text('deskripsi_kegiatan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('aktivitas_alumni');
    }
}
