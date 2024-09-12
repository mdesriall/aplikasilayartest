<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_lengkap',
        'kode_status',
        'no_hp',
        'password',
        'alamat',
        'jenis_kelamin',
        'nik',
        'tempat_lahir',
        'tgl_lahir',
        'pekerjaan',
        'agama',
        'status_kawin',
        'foto_profil'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'no_hp_verified_at' => 'datetime',
    ];

    public function isAdmin()
    {
        return $this->kode_status == '1111';
    }

    public function isPengguna()
    {
        return $this->kode_status == '3333';
    }

}
