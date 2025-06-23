<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelOrder extends Model
{
    protected $table = 'orders'; 
    protected $fillable = ['nama', 'no_hp', 'alamat','catatan', 'total_price','status_pembayaran', 'metode_pembayaran', 'bukti_pembayaran', 'tanggal_pembayaran'];

    public function items()
    {
    return $this->hasMany(ModelItem::class, 'order_id'); 
    }
}
