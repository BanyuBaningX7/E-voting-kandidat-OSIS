<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id('id_siswa');
            $table->string('NIS')->unique();
            $table->string('nama_siswa');
            $table->string('kelas');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};
