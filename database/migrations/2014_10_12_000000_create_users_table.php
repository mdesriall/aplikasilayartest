<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap')->nullable();
            $table->integer('kode_status')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('nik')->nullable();
            $table->string('alamat')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->string('foto_profil')->nullable();
            $table->string('tgl_lahir')->nullable();
            $table->enum('jenis_kelamin',['Laki-laki','Perempuan'])->nullable();
            $table->enum('pekerjaan',['Tidak Bekerja','Pelajar / Mahasiswa','PNS / TNI / POLRI','Karyawan Swasta','Wiraswasta','Pedagang','Nelayan / Petani','Pekerja Lepas','Pensiunan'])->nullable();
            $table->enum('status_kawin',['Belum Kawin','Sudah Kawin','Cerai Hidup','Cerai Mati'])->nullable();
            $table->enum('agama',['Islam','Kristen','Katolik','Hindu','Buddha','Konghucu'])->nullable();
            $table->string('password')->nullable();
            $table->string('role')->default('pengguna');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
