<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenggunaPelatihPesertaTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Tabel pengguna
        Schema::create('pengguna', function (Blueprint $table) {
            $table->id('pengguna_id');
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('no_telepon');
            $table->text('alamat');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('kata_sandi'); // Kolom kata_sandi ditambahkan
            $table->string('foto_profil')->nullable();
            $table->enum('peran', ['Pelatih', 'Peserta']);
            $table->timestamps();
        });

        // Tabel pelatih
        Schema::create('pelatih', function (Blueprint $table) {
            $table->id('pelatih_id');
            $table->unsignedBigInteger('pengguna_id');
            $table->foreign('pengguna_id')->references('pengguna_id')->on('pengguna')->onDelete('cascade');
            $table->integer('pengalaman_kerja'); // dalam tahun
            $table->float('rating')->nullable();
            $table->enum('status', ['Aktif', 'Tidak Aktif'])->default('Tidak Aktif');
            $table->string('file')->nullable(); // Misalnya file CV atau dokumen pendukung lainnya
            $table->timestamps();
        });

        // Tabel peserta
        Schema::create('peserta', function (Blueprint $table) {
            $table->id('peserta_id');
            $table->unsignedBigInteger('pengguna_id');
            $table->foreign('pengguna_id')->references('pengguna_id')->on('pengguna')->onDelete('cascade');
            $table->string('pendidikan')->nullable();
            $table->text('pengalaman_kerja')->nullable();
            $table->timestamps();
        });

        // Tabel spesialisasi
        Schema::create('spesialisasi', function (Blueprint $table) {
            $table->id('spesialisasi_id');
            $table->unsignedBigInteger('pelatih_id');
            $table->string('nama_spesialisasi'); // Nama spesialisasi
            $table->foreign('pelatih_id')->references('pelatih_id')->on('pelatih')->onDelete('cascade');
            $table->timestamps();
        });

        // Tabel keahlian
        Schema::create('keahlian', function (Blueprint $table) {
            $table->id('keahlian_id');
            $table->unsignedBigInteger('peserta_id');
            $table->string('nama_keahlian'); // Nama keahlian
            $table->foreign('peserta_id')->references('peserta_id')->on('peserta')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('keahlian');
        Schema::dropIfExists('spesialisasi');
        Schema::dropIfExists('peserta');
        Schema::dropIfExists('pelatih');
        Schema::dropIfExists('pengguna');
    }
}
