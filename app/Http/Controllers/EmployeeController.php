<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Customer;
use App\Models\Employee;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;


class EmployeeController extends Controller
{
    //
    public function  addEmployee(Request $request){

        
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

        return view('Employee');
    }
}
