<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $table = 'admin'; // Nama tabel
    protected $primaryKey = 'admin_id'; // Primary key
    protected $fillable = ['username', 'kata_sandi', 'role']; // Kolom yang dapat diisi
}
