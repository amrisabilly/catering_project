<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelDataSiswa extends Model
{
    protected $table = 'tabel_datasiswa'; // Nama tabel yang digunakan

    protected $fillable = [
        'id_student',
        'full_name',
        'phone_number',
        'class',
        'gender',
        'menu_price',
        'allergies',
        'additional_note',
    ];
}
