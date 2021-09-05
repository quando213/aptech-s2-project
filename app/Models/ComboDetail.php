<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ComboDetail extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'combo_id',
        'product_id',
        'quantity',
    ];
}
