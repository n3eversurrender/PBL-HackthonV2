<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sertifikat extends Model
{
    use HasFactory;

    protected $table = 'sertifikat';
    protected $primaryKey = 'sertifikat_id';

    protected $fillable = [
        'pendaftaran_id', 'peserta_id', 'nama_kursus', 'file_sertifikat', 'nomor_sertifikat', 'tanggal_terbit'
    ];

    public function pendaftaran()
    {
        return $this->belongsTo(Pendaftaran::class, 'pendaftaran_id');
    }

    public function peserta()
    {
        return $this->belongsTo(Peserta::class, 'peserta_id');
    }
}
