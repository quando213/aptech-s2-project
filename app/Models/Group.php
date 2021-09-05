<?php

namespace App\Models;

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
       return $this->belongsTo(Ward::class,'ward_id');
    }
    public function user(){
        return $this->hasMany(User::class);
    }
}
