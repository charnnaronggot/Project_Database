<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductLinescontroller extends Controller
{
    public function ProductLines(){
        return view('admin.ProductLines');
    }
}
