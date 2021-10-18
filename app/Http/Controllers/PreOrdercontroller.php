<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PreOrdercontroller extends Controller
{
    public function PreOrder(){
        return view('admin.PreOrder');
    }
}
