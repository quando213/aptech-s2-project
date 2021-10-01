<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Notification extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'user_id',
        'is_seen',
        'message',
        'custom_url',
        'order_id'
    ];

    public function user(){
        return $this->belongsTo(User::class)->withTrashed();
    }

    public function order() {
        return $this->belongsTo(Order::class);
    }
}
