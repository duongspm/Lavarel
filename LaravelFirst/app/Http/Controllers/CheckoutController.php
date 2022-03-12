<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Session;
use Cart;
session_start();

class CheckoutController extends Controller
{
    //
    public function login_checkout(){
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();

        return view('pages.checkout.login_checkout')->with('cate_product',$cate_product)-> with('brand_product',$brand_product);
    }
    public function register()
    {
        return view('pages.checkout.register_customer');
    }
    public function register_customer(Request $request){
        $data = array();
        $data['customer_fullname'] = $request->customer_fullname;
        $data['customer_phone'] = $request->customer_phone;
        $data['customer_email'] = $request->customer_email;
        $data['customer_password'] = $request->customer_password;
        $data['customer_date'] = $request->customer_date;
        $data['customer_gender'] = $request->customer_gender;

        $customer_id = DB::table('tbl_customers')->insertGetId($data);

        Session::put('customer_id',$customer_id);
        // Session::put('customer_fullname',$customer_fullname);
        return Redirect::to('/login-checkout');
    }
 
    public function login_customer(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $result = DB::table('tbl_customers')->where('customer_email',$email)->where('customer_password',$password)->first();
       
        if($result)
        {
            
            return Redirect::to('/home');
        }
        else
        {
            return Redirect::to('/login-checkout');
        }
        Session::put('customer_id',$result->$customer_id);
        // Session::put('customer_fullname',$customer_fullname);
        
    }

    public function logout(){
        Session::flush();
        return Redirect('/login-checkout');
    }
}
