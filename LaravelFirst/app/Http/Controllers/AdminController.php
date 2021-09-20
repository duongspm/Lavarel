<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect; //giống như cái return - thành công hay thất bại trả về trang gì gì đó
session_start();

class AdminController extends Controller
{
    //
    public function login(){
        return view('admin_login');
    }
    public function index(){
        return view('admin.dashboard');
    }
    public function dashboard(Request $request){
        // $admin_email=$request->admin_email;
        // $admin_password=md5($request->admin_password);
        // $result = DB::table('tbl_admin')->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();//lấy giới hạn 1 user
        // Session::put('admin_name',$result->admin_name);
        //return view('admin.dashboard');
         //if($result){
            // Session::put('admin_name',$result->admin_name);
             return view('admin.dashboard');
            //  Session::put('admin_id',$result->admin_id);
        //      return Redirect::to('/dashboard');
        // }else{
        //     Session::put('message','Sai rùi man');
        //     return Redirect::to('/admin-login');
        // }
    }
    public function logout(){
        Session::put('admin_name',null);
        Session::put('admin_id',null);
        return Redirect::to('/admin-login');
    }
}
