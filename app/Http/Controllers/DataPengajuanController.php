<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\DataPengajuan;
use App\Http\Controllers\SuratpengajuanController;
use App\Models\suratpengajuan;

class DataPengajuanController extends Controller
{
    public function index(){
        $data = suratpengajuan::paginate(5);
        return view ('datapengajuan', compact('data'));
    }

    public function tampilkansuratpengajuan($id){

        $data = suratpengajuan::find($id);
        return view ('lihatsuratpengajuan', compact('data'));
       }
}
