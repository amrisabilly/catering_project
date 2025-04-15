<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    // Tentukan nama tabel (Laravel secara otomatis menggunakan plural dari nama model)
    protected $table = 'dosen';

    // Tentukan kolom mana yang dapat diisi massal
    protected $fillable = [
        'nama',
        'alamat',
        'jeniskel',
    ];
}
