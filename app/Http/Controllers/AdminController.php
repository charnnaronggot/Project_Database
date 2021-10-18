<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Customer;
use App\Models\Employee;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    function index(){
            $users = User::all();
            $user = Auth::user() -> name  ;

            if($user== "EMANUEL"){

            return view('Admin.admin' ,compact('users'));

            }else {

                return view('/dashboard');

            }



    }

    function customer(){
        $customers= Customer::all();
        $user = Auth::user() -> name  ;

        if($user== "EMANUEL"){

        return view('Admin.customer' ,compact('customers'));

        }else {

            return view('/dashboard');

        }
    }

    function  employee(){
        $employees = Employee::all();
        $user = Auth::user() -> name  ;

        if($user== "EMANUEL"){

        return view('Admin.employee' ,compact('employees'));

        }else {

            return view('/dashboard');

        }
    }

    function  product(){
        $products = Product::all();
        $user = Auth::user() -> name  ;

        if($user== "EMANUEL"){

        return view('Admin.product' ,compact('products'));

        }else {

            return view('Customer.product' ,compact('products')) ;

        }
    }
   
    function  addEmployee(Request $request){

        
        $request->validate(
            [
                'firstname'=>'required|max:255',
                'lastname'=>'required|max:255'
            ],
            [
                'firstname.required'=>"กรุณาป้อนชื่อด้วยครับ",
                'firstname.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                'lastname.required'=>"กรุณาป้อนชื่อด้วยครับ",
                'lastname.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
            ]
        );
        //บันทึกข้อมูล
        $data = array();
        $data["firstname"] = $request->firstname;
        $data["lastname"] = $request->lastname;
        $data["extention"] = $request->extention;
        $data["email"] = $request->email;
        $data["password"] = Hash::make('$request->password');
        $data["officerCode"] = $request->officerCode;
        $data["reportTo"] = $request->reportTo;
        $data["jobTitle"] = $request->jobTitle;
       

        //query builder
        DB::table('employees')->insert($data);

        return redirect()->back()->with('success',"บันทึกข้อมูลเรียบร้อย");
    }



    function  addProduct(Request $request){
       
        
        $request->validate(
            [
                'product_code'=>'required|max:255|unique:products',
                'product_name'=>'required|max:255'
            ],
            [
                'product_code.required'=>"กรุณาป้อนชื่อด้วยครับ",
                'product_code.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                'product_name.required'=>"กรุณาป้อนชื่อด้วยครับ",
                'product_name.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
            ]
        );
        //บันทึกข้อมูล
        $data = array();
        $data["product_code"] = $request->product_code;
        $data["product_name"] = $request->product_name;
        $data["product_line"] = $request->product_line;
        $data["product_scale"] = $request->product_scale;
        $data["product_vendor"] = $request->product_vendor;
        $data["product_description"] = $request->product_description;
        $data["quantity_instock"] = $request->quantity_instock;
        $data["buy_price"] = $request->buy_price;
        $data["MSRP"] = $request->MSRP;
     
       
        //query builder
        DB::table('products')->insert($data);

        return redirect()->back()->with('success',"บันทึกข้อมูลเรียบร้อย");
    }






        public function editProduct($id){
           //$edit = DB::table('products') -> get() -> where($request = 'product_code');
        //    $users = DB::table('products')->where( $request-> product_cod , product->product_code);

        //    foreach ($users as $user) {
        //        echo $user->name;
        //    }
        
        $data =  product::find($id) ;
        return view('admin.editProduct' , ['data' => $data]);    
        
                    // $product_code = $request->input('product_code');
                    // $product_name = $request->input('product_name');
                    // $product_line = $request->input('product_name');
                    // $product_scale = $request->input('product_name');

                    // dd($product_code , $product_name , $product_line , $product_scale);
                                 //  $product = Product::find($product_code);
             
            //  return view('admin.editProduct',compact('product'));
        }

        public function updateProduct(Request $request ){

            //ตรวจสอบข้อมูล
            // $request->validate(
            //     [
            //         'department_name'=>'required|unique:departments|max:255'
            //     ],
            //     [
            //         'department_name.required'=>"กรุณาป้อนชื่อแผนกด้วยครับ",
            //         'department_name.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
            //         'department_name.unique'=>"มีข้อมูลชื่อแผนกนี้ในฐานข้อมูลแล้ว"
            //     ]
            // );

            //return $request -> input() ; 
            $data = product::find($request->id) ;
            $data->product_code = $request-> product_code ; 
            $data->product_name = $request-> product_name ; 
            $data->product_line = $request-> product_line ; 
            $data->product_scale = $request-> product_scale ; 
            $data->product_vendor = $request-> product_vendor ; 
            $data->product_description = $request-> product_description ; 
            $data->quantity_instock = $request-> quantity_instock ; 
            $data->buy_price = $request-> buy_price ; 
            $data->MSRP = $request-> MSRP; 
            $data-> save() ;
            return redirect ('/product/all') ; 

            //return $request ->input();
            //dd($product_code);
            // $update = Product::find($product_code)->update([
            //     'product_code'=>$request->product_code,
            //    // 'user_id'=>Auth::user()->id
            // ]);
            // return redirect()->route('product')->with('success',"อัพเดตข้อมูลเรียบร้อย");
        }
    
    public function categories(){

    }

    

    //
}
