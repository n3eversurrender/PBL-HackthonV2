<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;

    protected $table = 'peserta';
    protected $primaryKey = 'peserta_id';
    protected $fillable = [
        'pengguna_id', 'pendidikan', 'pengalaman_kerja'
    ];

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'pengguna_id');
    }

    public function keahlian()
    {
        return $this->hasMany(Keahlian::class, 'peserta_id');
    }
}
