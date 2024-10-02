<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('mahasiswa', function (Blueprint $table) {
        $table->id();  // Primary Key
        $table->string('nim')->unique();  // NIM dengan tipe string dan unique
        $table->string('nama');  // Nama Mahasiswa
        $table->string('jurusan');  // Jurusan Mahasiswa
        $table->enum('gender', ['Laki-laki', 'Perempuan']);  // Gender dengan enum
        $table->text('alamat');  // Alamat
        $table->timestamps();  // Kolom created_at dan updated_at
    });
}

public function down()
{
    Schema::dropIfExists('mahasiswa');  // Menghapus tabel jika rollback
}};