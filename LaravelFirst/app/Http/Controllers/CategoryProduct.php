<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();
class CategoryProduct extends Controller
{
    //
    public function add_category_product()
    {
        return view('admin.add_category_product');
    }
    public function all_category_product()
    {
        $all_category_product=DB::table('tbl_category_product')->get();
        $manager_category_product=view('admin.all_category_product')->with('all_category_product',$all_category_product); //goi lai theo ten file da tao, $all_category_product ở ngoài sẽ đc gán vào all_category_product ở trong
        return view('admin_layout')->with('admin.all_category_product',$manager_category_product); // cái trang admin_layout sẽ chứa category_product lun được gán vào biến $manager_category_product
    }
    public function save_category_product(Request $request)
    {
        $data = array();// ten cot
        $data['category_name'] = $request->category_product_name;
        $data['category_desc'] = $request->category_product_desc;
        $data['category_status'] = $request->category_product_status;
        DB::table('tbl_category_product')->insert($data);
        Session::put('message','thanh cong hay thanh thu thi khong biet');
        return Redirect::to('add-category-product');
    }
    //update status category product
    public function unactive_category_product($category_product_id) //giống với cái tên bên web.php đặt á $category_product_id
    {
        DB::table('tbl_category_product')->where('category_id',$category_product_id)->update(['category_status'=>1]);
        Session::put('message','Cập nhật trạng thái là ẨN');
        return Redirect::to('all-category-product');
    }
    public function active_category_product($category_product_id)
    {
        DB::table('tbl_category_product')->where('category_id',$category_product_id)->update(['category_status'=>0]);
        Session::put('message','Cập nhật trạng thái là HIỆN');
        return Redirect::to('all-category-product');
    }
    //
}
