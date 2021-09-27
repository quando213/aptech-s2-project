<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'shipping_name',
        'shipping_ward_id',
        'shipping_district_id',
        'shipping_street',
        'shipping_phone',
        'shipper_id',
        'total_price',
        'status',
        'payment_method',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function orderDetail()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function ward()
    {
        return $this->belongsTo(Ward::class, 'shipping_ward_id');
    }

    public function district()
    {
        return $this->belongsTo(District::class, 'shipping_district_id');
    }
    public function shipper()
    {
        return $this->belongsTo(User::class, 'shipper_id');
    }

}
