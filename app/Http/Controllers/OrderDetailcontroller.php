<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderDetailcontroller extends Controller
{
    public function OrderDetails(){
        return view('admin.OrderDetail');
    }
}
