<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelItem extends Model
{
    protected $table = 'items'; 
    protected $fillable = ['order_id', 'menu_id', 'qty', 'price', 'subtotal'];

    public function menu()
    {
        return $this->belongsTo(ModelMenu::class, 'menu_id');
    }
}
