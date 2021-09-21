<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();

class BrandProduct extends Controller
{
    //
    public function add_brand_product()
    {
        return view('admin.add_brand_product');
    }
    public function all_brand_product()
    {
        $all_brand_product=DB::table('tbl_brand')->get();
        $manager_brand_product=view('admin.all_brand_product')->with('all_brand_product',$all_brand_product); //goi lai theo ten file da tao, $all_brand_product ở ngoài sẽ đc gán vào all_brand_product ở trong
        return view('admin_layout')->with('admin.all_brand_product',$manager_brand_product); // cái trang admin_layout sẽ chứa brand_product lun được gán vào biến $manager_brand_product
    }
    public function save_brand_product(Request $request)
    {
        $data = array();// ten cot
        $data['brand_name'] = $request->brand_product_name;
        $data['brand_desc'] = $request->brand_product_desc;
        $data['brand_status'] = $request->brand_product_status;
        DB::table('tbl_brand')->insert($data);
        Session::put('message','thanh cong hay thanh thu thi khong biet');
        return Redirect::to('add-brand-product');
    }
    //update status brand product
    public function unactive_brand_product($brand_product_id) //giống với cái tên bên web.php đặt á $brand_product_id
    {
        DB::table('tbl_brand')->where('brand_id',$brand_product_id)->update(['brand_status'=>1]);
        Session::put('message','Cập nhật trạng thái là ẨN');
        return Redirect::to('all-brand-product');
    }
    public function active_brand_product($brand_product_id)
    {
        DB::table('tbl_brand')->where('brand_id',$brand_product_id)->update(['brand_status'=>0]);
        Session::put('message','Cập nhật trạng thái là HIỆN');
        return Redirect::to('all-brand-product');
    }
    //
    //edit
    public function edit_brand_product($brand_product_id)
    {
        $edit_brand_product=DB::table('tbl_brand')->where('brand_id',$brand_product_id)->get();
        $manager_brand_product=view('admin.edit_brand_product')->with('edit_brand_product',$edit_brand_product); //goi lai theo ten file da tao, $all_brand_product ở ngoài sẽ đc gán vào all_brand_product ở trong
        return view('admin_layout')->with('admin.edit_brand_product',$manager_brand_product); // cái trang admin_layout sẽ chứa brand_product lun được gán vào biến $manager_brand_product
    }
    public function update_brand_product(Request $request, $brand_product_id)//request dùng để lấy yêu cầu dữ liệu
    {
        $data = array();
        $data['brand_name'] = $request->brand_product_name;
        $data['brand_desc'] = $request->brand_product_desc;
        DB::table('tbl_brand')->where('brand_id',$brand_product_id)->update($data);
        Session::put('message','Cập nhật danh mục sản phẩm thành công rồi nha');
        return Redirect::to('all-brand-product');
    }
    public function delete_brand_product($brand_product_id)
    {
        DB::table('tbl_brand')->where('brand_id',$brand_product_id)->delete();
        Session::put('message','XÓA danh mục sản phẩm thành công rồi nha');
        return Redirect::to('all-brand-product');
    }
}
