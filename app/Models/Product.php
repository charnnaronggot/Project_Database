<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'product_code',
        'product_name',
        'product_line',
        'product_scale',
        'product_vendor',
        'product_description',
        'quantity_instock',
        'buy_price',
        'MSRP'
    ];

    public function user(){
        return $this->hasOne(User::class,'id','product_code');
    }
}
