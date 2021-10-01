<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderDetail extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'product_id',
        'order_id',
        'quantity',
        'unit_price',
    ];

    public function product(){
        return $this->belongsTo(Product::class ,'product_id')->withTrashed();
    }

    public function order(){
        return $this->belongsTo(Order::class ,'order_id');
    }

    public function subtotal() {
        return $this->unit_price * $this->quantity;
    }
}
