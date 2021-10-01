<?php

namespace App\Models;

use App\Enums\UserRole;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Group extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'name',
        'ward_id',
        'type'
    ];

    public function ward(){
       return $this->belongsTo(Ward::class);
    }

    public function users(){
        return $this->hasMany(User::class);
    }

    public function shippers() {
        return $this->users()->where('role', UserRole::SHIPPER);
    }
}
