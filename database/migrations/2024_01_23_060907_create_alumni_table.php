<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumniTable extends Migration
{
    public function up()
    {
        Schema::create('alumni', function (Blueprint $table) {
            $table->string('name');
            $table->string('nim')->unique();
            $table->string('email')->unique();
            $table->text('alamat')->nullable();
            $table->string('gelar');
            $table->string('jurusan');
            $table->string('nomor_telepon');
            $table->date('tanggal_lahir');
            $table->year('tahun_lulus');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('alumni');
    }
}
