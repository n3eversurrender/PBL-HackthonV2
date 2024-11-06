<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RatingPelatih extends Model
{
    use HasFactory;

    protected $table = 'rating_pelatih';
    protected $primaryKey = 'rating_pelatih_id';

    protected $fillable = [
        'pelatih_id', 'peserta_id', 'rating', 'komentar', 'waktu'
    ];

    public function pelatih()
    {
        return $this->belongsTo(Pelatih::class, 'pelatih_id');
    }

    public function peserta()
    {
        return $this->belongsTo(Peserta::class, 'peserta_id');
    }
}
