<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Notification extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'sender_id',
        'the_send',
        'message',
        'link'
    ];
    public function user(){
        return $this->belongsTo(User::class,'sender_id');
    }
}
