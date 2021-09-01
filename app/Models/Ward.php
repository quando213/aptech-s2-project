<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'type',
        'nameWithTypes',
        'path',
        'pathWithType',
        'district_id',
        'city_id',
        'code',
        'parent_code',
        'status'
    ];
}
