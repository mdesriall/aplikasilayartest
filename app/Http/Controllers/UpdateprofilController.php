<?php

namespace App\Http\Controllers;

use App\Models\Updateprofil;
use App\Models\User;
use Illuminate\Http\Request;

class UpdateprofilController extends Controller
{
    public function index()
    {
        $data = User::all();
        return view('profile.edit', compact('data'));
    }

    public function update(Request $request)
{
    $user = auth()->user();

    if ($request->hasFile('foto')) {
        $file = $request->file('foto');
        $filename = $file->getClientOriginalName();
        $file->move('foto/', $filename);

        $user->foto_profil = $filename;
    }

    $user->update([
        'nama_lengkap' => $request->input('nama_lengkap'),
        'no_hp' => $request->input('no_hp'),
        'nik' => $request->input('nik'),
        'alamat' => $request->input('alamat'),
        'tempat_lahir' => $request->input('tempat_lahir'),
        'tgl_lahir' => $request->input('tgl_lahir'),
        'pekerjaan' => $request->input('pekerjaan'),
        'agama' => $request->input('agama'),
        'status_kawin' => $request->input('status_kawin'),
        'jenis_kelamin' => $request->input('jenis_kelamin'),
        
    ]);

    return redirect()->route('profile.edit')->with('status', 'Profile updated successfully');
}


    

}
