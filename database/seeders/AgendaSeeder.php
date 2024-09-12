<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data_keuangans')->insert([
            'transaksi'=> 'Menang Giveaway',
            'tipe_dana'=> 'Debit',
            'nominal'=> '50.000.000',
            
        ]);
    }
}
