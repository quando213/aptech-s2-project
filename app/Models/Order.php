<?php

namespace App\Models;

use Carbon\Carbon;
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
        'paid_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function details()
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

    public function getCreatedAtAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format(DISPLAY_DATETIME_FORMAT);
    }

    public function getUpdatedAtAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format(DISPLAY_DATETIME_FORMAT);
    }

    public function getFullAddress()
    {
        return "{$this->shipping_street}, {$this->ward->name}, {$this->district->name}";
    }
}
