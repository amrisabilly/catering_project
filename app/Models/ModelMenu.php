<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelMenu extends Model
{
    // Model Menu
    protected $table = 'tabel_menu';
    protected $fillable = ['kode_menu', 'nama_menu', 'keterangan', 'harga', 'gambar','kategori'];
    protected $primaryKey = 'id';
}
