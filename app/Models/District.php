<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class District extends Model
{
    use HasFactory;

    protected $fillable = [
        'maqh',
        'name',
        'type',
        'matp'
    ];
    protected $primaryKey = 'maqh';
    public function user(){
        return $this->hasMany(User::class);
    }
}
