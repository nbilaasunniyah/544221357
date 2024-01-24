<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKontakDaruratTable extends Migration
{
    public function up()
    {
        Schema::create('kontak_darurat', function (Blueprint $table) {
            
            $table->string('nim');
            $table->string('nama_kontak_darurat');
            $table->string('hubungan_dengan_kontak');
            $table->string('nomor_telepon_kontak');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kontak_darurat');
    }
}
