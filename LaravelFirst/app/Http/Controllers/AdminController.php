<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Login;
//use Illuminate\Support\Facades\DB;
use Socialite;
use App\Social;
use Session;
use Illuminate\Support\Facades\Redirect; //giống như cái return - thành công hay thất bại trả về trang gì gì đó
session_start();

class AdminController extends Controller
{

    public function login_facebook(){
        return Socialite::driver('facebook')->redirect();
    }

    public function callback_facebook(){
        $provider = Socialite::driver('facebook')->user();
        $account = Social::where('provider','facebook')->where('provider_user_id',$provider->getId())->first();
        if($account){
            //login in vao trang quan tri  
            $account_name = Login::where('admin_id',$account->user)->first();
            Session::put('admin_name',$account_name->admin_name);
            Session::put('admin_id',$account_name->admin_id);
            return redirect('/admin/dashboard')->with('message', 'Đăng nhập Admin thành công');
        }else{

            $hieu = new Social([
                'provider_user_id' => $provider->getId(),
                'provider' => 'facebook'
            ]);

            $orang = Login::where('admin_email',$provider->getEmail())->first();

            if(!$orang){
                $orang = Login::create([
                    'admin_name' => $provider->getName(),
                    'admin_email' => $provider->getEmail(),
                    'admin_password' => '',
                    'admin_phone' => '',
                    //'admin_status' => 1

                ]);
            }
            $hieu->login()->associate($orang);
            $hieu->save();

            $account_name = Login::where('admin_id',$account->user)->first();

            Session::put('admin_name',$account_name->admin_name);
            Session::put('admin_id',$account_name->admin_id);
            return redirect('/admin/dashboard')->with('message', 'Đăng nhập Admin thành công');
        } 
    }


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
        // $data = $request->all();
        // $admin_email=$data['admin_email'];
        // $admin_password=$data['admin_password'];
        
        // $login = Login::where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
        // $login_count = $login->count();
        // $result = DB::table('tbl_admin')->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();//lấy giới hạn 1 user
        // if($login_count){
        //     Session::put('admin_name',$login->admin_name);
        //     Session::put('admin_id',$login->admin_id);
        //     return Redirect::to('index');
        // }else{
        //         Session::put('message','Sai rùi man');
        //         return Redirect::to('/admin-login');
        //     }
        
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
        //--------------------------------------------------
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
