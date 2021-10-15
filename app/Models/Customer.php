<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    use SolfDelete;

    protected $fillable = [
       
        'customerNumber',
        'customerName',
        'contactLastname',
        'contactFirstName',
        'Phone',
        'AddressID',
        'SaleRepEmployeeNumber'


    ];
}
