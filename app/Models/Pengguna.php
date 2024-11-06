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
        'nama',
        'email',
        'no_telepon',
        'alamat',
        'jenis_kelamin',
        'kata_sandi',
        'foto_profil',
        'peran'
    ];

    public function pelatih()
    {
        return $this->hasOne(Pelatih::class, 'pengguna_id');
    }

    public function peserta()
    {
        return $this->hasOne(Peserta::class, 'pengguna_id');
    }

    public function kursus()
    {
        return $this->hasMany(Kursus::class, 'pengguna_id', 'pengguna_id');
    }

    public function pendaftaran()
    {
        return $this->hasMany(Pendaftaran::class, 'pengguna_id');
    }
}
