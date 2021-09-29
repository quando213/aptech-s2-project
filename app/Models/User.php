<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;


    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'district_id',
        'ward_id',
        'street',
        'phone',
        'group_id',
        'role',
        'position',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function ward(){
        return $this->belongsTo(Ward::class);
    }

    public function orderShipper(){
        return $this->hasMany(Order::class);
    }

    public function notifications(){
        return $this->hasMany(Notifiable::class);
    }

    public function district(){
        return $this->belongsTo(District::class);
    }

    public function group(){
        return $this->belongsTo(Group::class,'group_id');
    }
}
