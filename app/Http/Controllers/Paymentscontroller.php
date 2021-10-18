<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Paymentscontroller extends Controller
{
    public function Payments(){
        return view('admin.Payments');
    }
}
