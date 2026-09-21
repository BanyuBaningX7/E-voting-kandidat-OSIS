<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('hasil_pemilihan', function (Blueprint $table) {
            $table->id('id_hasil');
            $table->foreignId('id_kandidat')->unique();
            $table->unsignedInteger('jumlah_suara')->default(0);
            $table->decimal('persentase', 5, 2)->unsigned()->default(0);

            $table->foreign('id_kandidat')
                  ->references('id_kandidat')
                  ->on('kandidat')
                  ->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hasil_pemilihan');
    }
};
