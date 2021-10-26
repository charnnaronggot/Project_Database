<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/test' ,[AdminController::class,'test']) -> name('test');
Route::get('/admin' ,[AdminController::class,'index']) -> name('admin');



Route::get('/customer/all' ,[CustomerController::class,'customer']) -> name('customer');
Route::post('/customer/add' ,[CustomerController::class,'addCustomer']) -> name('addCustomer');
Route::get('customer/edit/{customerNumber}' ,[ProductController::class,'editcustomer'])-> name ('editCustomer') ;
Route::post('/customer/update/',[ProductController::class,'updatecustomer']) -> name('updateCustomer');


Route::get('/employee/all' ,[EmployeeController::class,'employee']) -> name('employee');
Route::post('/employee/add' ,[EmployeeController::class,'addEmployee']) -> name('addEmployee');
//Route::get('/employee/add' ,[AdminController::class,'addEmployee']) -> name('addEmployee');

Route::get('/product/all' ,[ProductController::class,'product']) -> name('product') ;
Route::post('/product/add' ,[ProductController::class,'addProduct']) -> name('addProduct') ;
Route::get('product/edit/{product_code}' ,[ProductController::class,'editProduct']) ;
Route::post('/product/update/',[ProductController::class,'updateProduct']) ;

Route::get('user/edit/{id}' ,[AdminController::class,'editUser'])  -> middleware('check');
Route::post('/user/update/',[AdminController::class,'updateUser']);
Route::post('/user/changerole/',[AdminController::class,'changeRole']) -> name('changeRole');
Route::get('/user/delete/{id}',[AdminController::class,'deleteUser']) -> middleware('check');


Route::get('/user/buy/{id}',[AdminController::class,'buy']);



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    // $user = User::all();
    // return view('dashboard' , compact('user'));
    $user = Auth::user() -> id ;
    return view('dashboard' , compact('user'));


})->name('dashboard');
