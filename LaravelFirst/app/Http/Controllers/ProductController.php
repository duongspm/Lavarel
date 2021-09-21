<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Session;

class ProductController extends Controller
{
    //
    public function add_product()
    {
        $cate_product =DB::table('tbl_category_product')->orderby('category_id','desc')->get();
        $brand_product =DB::table('tbl_brand')->orderby('brand_id','desc')->get();
        return view('admin.add_product')->with('cate_product',$cate_product)-> with('brand_product',$brand_product);
    }
    public function all_product()
    {
        $all_product=DB::table('tbl_product')->get();
        $manager_product=view('admin.all_product')->with('all_product',$all_product); //goi lai theo ten file da tao, $all_product ở ngoài sẽ đc gán vào all_product ở trong
        return view('admin_layout')->with('admin.all_product',$manager_product); // cái trang admin_layout sẽ chứa brand_product lun được gán vào biến $manager_product
    }
    public function save_product(Request $request)
    {
        $data = array();// ten cot
        $data['product_name'] = $request->product_name;
        $data['product_price'] = $request->product_price;
        $data['product_desc'] = $request->product_desc;
        $data['product_content'] = $request->product_content;
        $data['category_id'] = $request->category_id;
        $data['brand_id'] = $request->brand_id;
        $data['product_status'] = $request->product_status;
        $get_image=file('product_image');
        if($get_image){

        }
        DB::table('tbl_product')->insert($data);
        Session::put('message','thanh cong hay thanh thu thi khong biet');
        return Redirect::to('add-product');
    }
    //update status brand product
    public function unactive_product($brand_product_id) //giống với cái tên bên web.php đặt á $brand_product_id
    {
        DB::table('tbl_product')->where('brand_id',$brand_product_id)->update(['brand_status'=>1]);
        Session::put('message','Cập nhật trạng thái là ẨN');
        return Redirect::to('all-product');
    }
    public function active_product($brand_product_id)
    {
        DB::table('tbl_product')->where('brand_id',$brand_product_id)->update(['brand_status'=>0]);
        Session::put('message','Cập nhật trạng thái là HIỆN');
        return Redirect::to('all-product');
    }
    //
    //edit
    public function edit_product($brand_product_id)
    {
        $edit_product=DB::table('tbl_product')->where('brand_id',$brand_product_id)->get();
        $manager_product=view('admin.edit_product')->with('edit_product',$edit_product); //goi lai theo ten file da tao, $all_product ở ngoài sẽ đc gán vào all_product ở trong
        return view('admin_layout')->with('admin.edit_product',$manager_product); // cái trang admin_layout sẽ chứa brand_product lun được gán vào biến $manager_product
    }
    public function update_product(Request $request, $brand_product_id)//request dùng để lấy yêu cầu dữ liệu
    {
        $data = array();
        $data['brand_name'] = $request->brand_product_name;
        $data['brand_desc'] = $request->brand_product_desc;
        DB::table('tbl_product')->where('brand_id',$brand_product_id)->update($data);
        Session::put('message','Cập nhật danh mục sản phẩm thành công rồi nha');
        return Redirect::to('all-brand-product');
    }
    public function delete_product($brand_product_id)
    {
        DB::table('tbl_product')->where('brand_id',$brand_product_id)->delete();
        Session::put('message','XÓA danh mục sản phẩm thành công rồi nha');
        return Redirect::to('all-brand-product');
    }
}
