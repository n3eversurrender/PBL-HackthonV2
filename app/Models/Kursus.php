<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kursus extends Model
{
    use HasFactory;

    protected $table = 'kursus';
    protected $primaryKey = 'kursus_id';

    protected $fillable = [
        'pengguna_id', 'judul', 'deskripsi', 'jadwal', 'harga', 'tingkat_kesulitan', 'rating', 'status', 'tgl_mulai', 'tgl_selesai', 'kapasitas', 'foto_kursus'
    ];

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'pengguna_id', 'pengguna_id');
    }    

    public function kurikulum()
    {
        return $this->hasMany(Kurikulum::class, 'kursus_id');
    }

    public function pendaftaran()
    {
        return $this->hasMany(Pendaftaran::class, 'kursus_id');
    }
}
