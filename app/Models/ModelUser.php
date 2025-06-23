<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelUser extends Model
{
    protected $table = 'tabel_user';
    protected $fillable = ['username', 'password'];
    protected $hidden = ['password'];
}
