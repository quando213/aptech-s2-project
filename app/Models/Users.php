<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'district_id',
        'ward_id',
        'street',
        'phone',
        'status',
        'position',
        'management_ward',
        'regiment',
        'role'
    ];
}
