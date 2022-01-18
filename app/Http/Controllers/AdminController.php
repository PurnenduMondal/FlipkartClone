<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Models\Order;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon; 

class AdminController extends Controller
{
    public function Index(){
        return view('admin.admin-login');   
    } 


    public function Dashboard(){
        
        return view('admin.dashboard');
    }

    public function Orders(){
        $orders = Order::latest()->get();
        return view('admin.orders', compact('orders'));
    }
    public function UpdateOrderStatus(Request $request){
        Order::findOrFail($request->id)->update([
            'status' => $request->status
        ]);
        return redirect()->route('admin.orders');
    }

    public function Brands(){
        return view('admin.brands');
    }

    public function Login(Request $request){
        // dd($request->all());

        if(Auth::guard('admin')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')  ])){
            return redirect()->route('admin.dashboard')->with('status','Admin Login Successfully');
        }else{
            return back()->with('status','Invaild Email Or Password');
        }

    }  


    public function AdminLogout(){

        Auth::guard('admin')->logout();
        return redirect('/')->with('status','Admin Logout Successfully');

    }


    public function AdminRegister(){

        return view('admin.admin-register');

    } 



    public function AdminRegisterCreate(Request $request){

        // dd($request->all());

        Admin::insert([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'created_at' => Carbon::now(),

        ]);

         return redirect()->route('admin_login_route')->with('status','Admin Created Successfully');

    } 
   
}