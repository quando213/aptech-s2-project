<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class District extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'type',
        'city_id'
    ];

    public function user(){
        return $this->hasMany(User::class);
    }

    public function wards() {
        return $this->hasMany(Ward::class);
    }
}
