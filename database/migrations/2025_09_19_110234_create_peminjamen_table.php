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
        Schema::create('peminjamans', function (Blueprint $table) {
        $table->id();
        $table->string('nama_peminjam');
        $table->string('nama_barang');
        $table->integer('jumlah_barang');
        $table->date('tanggal_pinjam');
        $table->date('tanggal_kembali');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
{
    Schema::dropIfExists('peminjamans');
}

};
