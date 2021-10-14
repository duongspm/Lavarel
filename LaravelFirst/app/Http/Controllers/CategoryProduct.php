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
    public function CheckLogin()
    {
        $admin_id=Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin-login')->send();
        }
    }
    public function add_category_product()
    {
        $this->CheckLogin();
        return view('admin.add_category_product');
    }
    public function all_category_product()
    {
        $this->CheckLogin();
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
        
        $get_image=$request->file('category_image');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension(); //lấy đuôi mở rộng
            $get_image->move('public/uploads/category',$new_image); //dư cái public nè, nó tự động gọi đến public r nên để v là dư nó sẽ tự tạo thêm 1 folder public nữa
            $data['category_image'] = $new_image;
            DB::table('tbl_category_product')->insert($data);
            Session::put('message','thanh cong hay thanh thu thi khong biet');
            return Redirect::to('add-category-product');
        }
        $data['category_image']='';
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
    //edit
    public function edit_category_product($category_product_id)
    {
        $this->CheckLogin();
        $edit_category_product=DB::table('tbl_category_product')->where('category_id',$category_product_id)->get();
        $manager_category_product=view('admin.edit_category_product')->with('edit_category_product',$edit_category_product); //goi lai theo ten file da tao, $all_category_product ở ngoài sẽ đc gán vào all_category_product ở trong
        return view('admin_layout')->with('admin.edit_category_product',$manager_category_product); // cái trang admin_layout sẽ chứa category_product lun được gán vào biến $manager_category_product
    }
    //Update nè
    public function update_category_product(Request $request, $category_product_id)//request dùng để lấy yêu cầu dữ liệu
    {
        $this->CheckLogin();
        $data = array();
        $data['category_name'] = $request->category_product_name;
        $data['category_desc'] = $request->category_product_desc;

        $get_image=$request->file('category_image');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension(); //lấy đuôi mở rộng
            $get_image->move('public/uploads/category',$new_image); //dư cái public nè, nó tự động gọi đến public r nên để v là dư nó sẽ tự tạo thêm 1 folder public nữa
            $data['category_image'] = $new_image;
            DB::table('tbl_category_product')->where('category_id',$category_product_id)->update($data);
            Session::put('message','thanh cong hay thanh thu thi khong biet');
            return Redirect::to('all-category-product');
        }

        DB::table('tbl_category_product')->where('category_id',$category_product_id)->update($data);
        Session::put('message','Cập nhật danh mục sản phẩm thành công rồi nha');
        return Redirect::to('all-category-product');
    }
    public function delete_category_product($category_product_id)
    {
        DB::table('tbl_category_product')->where('category_id',$category_product_id)->delete();
        Session::put('message','XÓA danh mục sản phẩm thành công rồi nha');
        return Redirect::to('all-category-product');
    }
    //hết chức năng của admin rồi nha

    //Chức năng khách hàng nè - lọc sản phẩm theo loại sản phẩm á
    public function show_category_home($category_id)
    {
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();
        $category_by_id = DB::table('tbl_product')
            ->join('tbl_category_product','tbl_product.category_id','=','tbl_category_product.category_id')
            ->where('tbl_product.category_id',$category_id)->get();
        $category_name = DB::table('tbl_category_product')->where('tbl_category_product.category_id',$category_id)->limit(1)->get();
            return view('pages.category.show_category')
                    -> with('cate_product',$cate_product)
                    -> with('brand_product',$brand_product)
                    -> with('category_by_id',$category_by_id)
                    -> with('category_name',$category_name);
    }
   
}
