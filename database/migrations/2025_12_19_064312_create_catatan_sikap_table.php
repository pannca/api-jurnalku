<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('catatan_sikap', function (Blueprint $table) {
            $table->id();
            $table->string('siswa_nama');
            $table->string('kategori');
            $table->text('catatan');
            $table->enum('status', ['dalam_perbaikan', 'sudah_berubah']);
            $table->date('dilaporkan');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('catatan_sikap');
    }
};
