<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    protected $table = 'pengguna';
    protected $primaryKey = 'pengguna_id';
    protected $fillable = [
        'nama', 'email', 'no_telepon', 'alamat', 'jenis_kelamin',
        'kata_sandi', 'foto_profil', 'peran' // Jika foto_profil ingin diisi
    ];

    // Relasi dengan Pelatih (One to One)
    public function pelatih()
    {
        return $this->hasOne(Pelatih::class, 'pengguna_id', 'pengguna_id');
    }

    // Relasi dengan Peserta (One to One)
    public function peserta()
    {
        return $this->hasOne(Peserta::class, 'pengguna_id', 'pengguna_id');
    }
}
