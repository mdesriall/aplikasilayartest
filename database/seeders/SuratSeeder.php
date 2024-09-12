<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suratpengajuans')->insert([
            'tipe_surat' => 'Surat Keterangan Domisili',
            'nama_lengkap' => 'Wikussangker Wirabumi',
            'jenis_kelamin' => 'Laki-laki',
            'tempat_lahir' => 'Batam',
            'tgl_lahir' => '13/12/2022',
            'no_nik' => '4312101005',
            'no_kk' => '4312101003',
            'nama_ayah' => 'Adi Wiyono',
            'nama_ibu' => 'Anic Nurhayati',
            'alamat' => 'Mediterania Blok KK no 15',
            'kewarganegaraan' => 'Warga Negara Indonesia (WNI)',
            'agama' => 'Islam',
            'pendidikan_terakhir' => 'SMA / SMK',
            'pekerjaan' => 'Pelajar / Mahasiswa',
            'status_kawin' => 'Belum Kawin',

        ]);
    }
}
