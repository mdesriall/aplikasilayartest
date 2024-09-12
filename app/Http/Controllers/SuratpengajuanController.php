<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\suratpengajuan;

class SuratpengajuanController extends Controller
{
    public function index(){
        $data = suratpengajuan::all();
        return view('suratpengajuan',compact('data'));
    }
    public function pengajuan(){
        return view('pengajuan');
    }

    public function insertdata(Request $request){
        //dd($request->all());
        suratpengajuan::create($request->all());
        return redirect()->route('suratpengajuan');
    }
    public function tampildata($id){
        $data = suratpengajuan::find($id);
        //dd($data);
    }
    public function updatedata(Request $request, $nama_lengkap){
        $data = suratpengajuan::find($nama_lengkap);
        $data->update($request->all());
        return redirect()->route('suratpengajuan');

    }

    
    public function status(){
        return view('status');
    }

    


}
