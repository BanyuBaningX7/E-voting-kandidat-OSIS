<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kandidat', function (Blueprint $table) {
            $table->id('id_kandidat');
            $table->string('nama_kandidat');
            $table->unsignedInteger('nomor_urut')->unique();
            $table->text('visi')->nullable();
            $table->text('misi')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kandidat');
    }
};
