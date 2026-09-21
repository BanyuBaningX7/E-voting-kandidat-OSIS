<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('suara', function (Blueprint $table) {
            $table->id('id_suara');
            $table->foreignId('id_siswa')->unique();
            $table->foreignId('id_kandidat');
            $table->timestamp('waktu_pilih')->useCurrent();

            $table->foreign('id_siswa')
                  ->references('id_siswa')
                  ->on('siswa')
                  ->cascadeOnDelete();

            $table->foreign('id_kandidat')
                  ->references('id_kandidat')
                  ->on('kandidat')
                  ->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('suara');
    }
};
