<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SolfDeletes;


class Product extends Model
{
    use HasFactory;
    use SolfDelete;

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

}
