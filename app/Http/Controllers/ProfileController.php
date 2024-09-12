<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Rules\NoHpRule;
use App\Models\User;



class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function edit(Request $request)
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    public function update(ProfileUpdateRequest $request)
{
    $user = auth()->user();

    if ($request->hasFile('foto')) {
        $file = $request->file('foto');
        $filename = $file->getClientOriginalName();
        $file->move('foto/', $filename);

        $user->foto_profil = $filename;
    }

    $user->update([
        'nama_lengkap' => $request->nama_lengkap,
        'no_hp' => $request->no_hp,
        'nik' => $request->nik,
        'alamat' => $request->alamat,
        'tempat_lahir' => $request->tempat_lahir,
        'tgl_lahir' => $request->tgl_lahir,
        'pekerjaan' => $request->pekerjaan,
        'agama' => $request->agama,
        'status_kawin' => $request->status_kawin,
        'jenis_kelamin' => $request->jenis_kelamin,
    ]);

    $user->save();

    return redirect()->route('profile.edit')->with('status', 'Profile updated successfully');
}



    

    /**
     * Delete the user's account.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function index()
{
    $users = User::all(); // Assuming you have a "User" model

    return view('datapengguna', ['users' => $users]);
}

public function hapuspengguna($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

    return redirect()->route('datapengguna')->with('status', 'User deleted successfully');
    }

}

    


