<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelDataSiswa extends Model
{
    protected $table = 'tabel_data_siswa';
    protected $fillable = ['full_name', 'phone_number', 'class', 'gender', 'menu_price', 'allergies', 'additional_note'];
    protected $primaryKey = 'id';
    public $timestamps = false;
}
