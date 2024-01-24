<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePekerjaanTable extends Migration
{
    public function up()
    {
        Schema::create('pekerjaan', function (Blueprint $table) {
            
            $table->string('nim');
            $table->string('nama_perusahaan');
            $table->string('jabatan');
            $table->date('tanggal_mulai');
            $table->date('tanggal_berakhir')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pekerjaan');
    }
}
