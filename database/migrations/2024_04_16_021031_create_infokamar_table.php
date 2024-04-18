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
        Schema::create('infokamar', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('kelas');
            $table->string('Kamar');
            $table->integer('jumlahTT');
            $table->integer('jumlahTerisi');
            $table->integer('jumlahKosong');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infokamar');
    }
};
