<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
//use Illuminate\Support\Facades\DB;
use Session;
use Illuminate\Support\Facades\Redirect; //giống như cái return - thành công hay thất bại trả về trang gì gì đó
session_start();

class AdminController extends Controller
{
    public function CheckLogin()
    {
        $admin_id=Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin-login')->send();
        }
    }
    //
    public function login(){
        return view('admin_login');
    }
    //show_dashboard -> index
    public function index(){
        $this->CheckLogin();
        return view('admin_layout');
    }
    public function dashboard(Request $request){
        $this->CheckLogin();
        $admin_email=$request->admin_email;
        $admin_password=$request->admin_password;

        $result = DB::table('tbl_admin')->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();//lấy giới hạn 1 user
        if($result){
            Session::put('admin_name',$result->admin_name);
            Session::put('admin_id',$result->admin_id);
            return view('admin.dashboard');
        }else{
                Session::put('message','Sai rùi man');
                return Redirect::to('/admin-login');
            }
        //Session::put('admin_name',$result->admin_name);
        // 
        //  if($result){
        //     Session::put('admin_name',$result->$admin_name);
        //     Session::put('admin_id',$result->$admin_id);
        //    // return view('admin.dashboard');
        //     return Redirect::to('/admin.dashboard');
        // }else{
        //     Session::put('message','Sai rùi man');
        //     return Redirect::to('/admin-login');
        // }

        //echo '<pre>';
        // print_r($result);
        // echo '</pre>';
    }
    public function logout(){
        $this->CheckLogin();
        Session::put('admin_name',null);
        Session::put('admin_id',null);
        return Redirect::to('/admin-login');
    }
}
