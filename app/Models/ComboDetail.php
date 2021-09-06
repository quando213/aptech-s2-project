<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ComboDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'combo_id',
        'product_id',
        'quantity',
    ];
    public function combo(){
        return $this->belongsTo(Combo::class,'combo_id');
    }
    public function product(){
        return $this->belongsTo(Product::class,'product_id');
    }

}
