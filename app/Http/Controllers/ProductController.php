<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    
    public function editProduct($id){

     
    $data =  product::find($id) ;
    return view('admin.editProduct' , ['data' => $data]);    
     
            
    }
}
