<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('krs', function (Blueprint $table) {
            $table->foreignId('id_mahasiswa')
                ->constrained('mahasiswa', 'id_mahasiswa');

            $table->foreignId('id_mk')
                ->constrained('mata_kuliah', 'id_mk');

            $table->primary(['id_mahasiswa', 'id_mk']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('krs');
    }
};
