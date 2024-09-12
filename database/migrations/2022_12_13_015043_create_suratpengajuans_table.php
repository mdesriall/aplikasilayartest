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
        Schema::create('suratpengajuans', function (Blueprint $table) {
            $table->id();
            $table->enum('tipe_surat',['Surat Keterangan Domisili','Pembuatan KTP','Pembuatan KK','Pembuatan Akte Kelahiran','Surat Keterangan Usaha','Perubahan Data','Surat Keterangan Pindah','Surat Pengantar Nikah','Surat Kematian','Pengantar Tidak Mampu','Pembuatan SKCK','Domisili Usaha']);
            $table->string('nama_lengkap');
            $table->enum('jenis_kelamin',['Laki-laki','Perempuan']);
            $table->string('tempat_lahir');
            $table->string('tgl_lahir');
            $table->string('no_nik');
            $table->string('no_kk');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('alamat');
            $table->enum('kewarganegaraan',['Warga Negara Indonesia (WNI)','Warga Negara Asing (WNA)']);
            $table->enum('agama',['Islam','Kristen','Katolik','Hindu','Buddha','Konghucu']);
            $table->enum('pendidikan_terakhir',['Tidak / Belum Sekolah','SD','SMP','SMA / SMK','Diploma 3 (D3)','Sarjana Terapan (D4)','Sarjana (S1)']);
            $table->enum('pekerjaan',['Tidak Bekerja','Pelajar / Mahasiswa','PNS / TNI / POLRI','Karyawan Swasta','Wiraswasta','Pedagang','Nelayan / Petani','Pekerja Lepas','Pensiunan']);
            $table->enum('status_kawin',['Belum Kawin','Sudah Kawin','Cerai Hidup','Cerai Mati']);
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
        Schema::dropIfExists('suratpengajuans');
    }
};
