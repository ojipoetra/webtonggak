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
        Schema::create('kunjungan', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_regis');
            $table->string('jam');
            $table->string('dokter');
            $table->string('no_rm');
            $table->string('nama_pasien');
            $table->string('no_telpon');
            $table->string('umur');
            $table->string('jenis_kelamin');
            $table->string('poliklinik');
            $table->string('penanggung_jawab');
            $table->string('alamat_pj');
            $table->string('status');
            $table->string('asal_rujukan');
            $table->string('jenis_bayar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kunjungan');
    }
};
