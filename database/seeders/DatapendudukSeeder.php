<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatapendudukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('datapenduduk3s')->insert([
            'nama_lengkap'=> 'Wikussangker Wirabumi',
            'no_nik'=> '4312101005',
            'no_kk'=> '4312101003',
            'pekerjaan'=> 'Pekerja Lepas',
            'alamat'=> 'Mediterania Blok KK 1/15A',
            'rt'=> '001',
            'rw'=> '008',
            'no_hp'=> '081378792900',
        ]);
    }
}
