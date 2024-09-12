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
        Schema::create('datapenduduks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->enum('jenis_kelamin',['Laki - laki','Perempuan']);
            $table->string('no_nik');
            $table->string('no_kk');
            $table->enum('pekerjaan',['Tidak Bekerja','Pelajar / Mahasiswa','PNS / TNI / POLRI','Karyawan Swasta','Wiraswasta','Pedagang','Nelayan / Petani','Pekerja Lepas','Pensiunan']);
            $table->string('alamat');
            $table->enum('rt',['001','002','003','004','005','006','007','008']);
            $table->enum('rw',['008']);
            $table->string('no_hp');
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
        Schema::dropIfExists('datapenduduks');
    }
};
