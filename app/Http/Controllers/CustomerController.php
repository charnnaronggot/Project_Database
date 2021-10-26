<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Customer;
use App\Models\Employee;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{

    public function editCustomer($id){
        $data =  product::find($id) ;
        return view('product.editProduct' , ['data' => $data]);    

    }

    public function updateCustomer(Request $request){


        $data = customer::find($request->id) ;
        $data-> save() ;
        return view ('/customer.customer') ; 
    }
    //
    public function  addCustomer(Request $request){
          
        $user = Auth::user() -> id ;
       $customers = Customer::all() ;
   //     //บันทึกข้อมูล
   //     $data = array();
   //     $data["customerNumber"] = $request->customerNumber;
   //     $data["customerName"] = $request->customerName;
   //     $data["contactLastname"] = $request->contactLastname;
   //     $data["contactFirstname"] = $request->contactFirstname;
   //     $data["phone"] = $request->phone;
   //     $data["AddressID"] = $request->AddressID;
   //     $data["SaleRepEmployeeNumber"] = $user;

      

   //     //query builder
   //     DB::table('customers')->insert($data);
   
   //     return view('customer.customer' , compact('customer'));
           $Customer = new customer ; 
           $Customer -> customerNumber = $request -> customerNumber ; 
           $Customer -> customerName = $request -> customerName ;
           $Customer -> contactLastname = $request ->contactLastname ; 
           $Customer -> contactFirstname = $request -> contactFirstname ; 
           $Customer -> phone = $request -> phone ;
           $Customer -> Addressid = $request -> AddressID ;
           $Customer -> SaleRepEmployeeNumber =   $user ;
           
           $Customer -> save() ;
           return view('customer.customer' , compact('customers'));
   }

   
   public function  customer(){
    $customer= Customer::all();

    return view('customer.customer' ,compact('customer'));

    }
    
    public function deleteCustomer($id){
        $delete= Product::find($id) -> delete () ;
        return redirect()->back()->with('success',"ลบข้อมูลถาวรเรียบร้อย");
}
}
