<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Customer;
use App\Models\Employee;

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
   
    function  addEmployee(Request $request){
        // $employees = Employee::all();
        // $user = Auth::user() -> name  ;
        // if($user== "EMANUEL"){

        // return view('Admin.addEmployee' ,compact('employees'));

        // }else {

        //     return view('/dashboard');

        // }
        // $request->validate(
        //     [
        //         'firstname'=>'required|max:255'
        //     ],
        //     [
        //         'firstname.required'=>"กรุณาป้อนชื่อด้วยครับ",
        //         'firstname.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
        //     ]
        // );
        // //บันทึกข้อมูล
        // $data = array();
        // $data["department_name"] = $request->department_name;
        // $data["user_id"] = Auth::user()->id;

        // //query builder
        // DB::table('departments')->insert($data);

        // return redirect()->back()->with('success',"บันทึกข้อมูลเรียบร้อย");
    }










    public function store(Request $request){
        //ตรวจสอบข้อมูล
        $request->validate(
            [
                'department_name'=>'required|unique:departments|max:255'
            ],
            [
                'department_name.required'=>"กรุณาป้อนชื่อแผนกด้วยครับ",
                'department_name.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
                'department_name.unique'=>"มีข้อมูลชื่อแผนกนี้ในฐานข้อมูลแล้ว"
            ]
        );
        //บันทึกข้อมูล
        $data = array();
        $data["product_code"] = $request->product_code;
        $data["user_id"] = Auth::user()->id;

        //query builder
        DB::table('departments')->insert($data);

        return redirect()->back()->with('success',"บันทึกข้อมูลเรียบร้อย");
    }

    

    //
}
