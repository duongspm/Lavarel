<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();

class ProductController extends Controller
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
    public function add_product()
    {
        $this->CheckLogin();
        $cate_product = DB::table('tbl_category_product')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->orderby('brand_id','desc')->get();
        return view('admin.add_product')->with('cate_product',$cate_product)-> with('brand_product',$brand_product);
    }
    public function all_product()
    {
        //$this->CheckLogin();
        $all_product = DB::table('tbl_product')
        ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
        ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
        ->orderby('tbl_product.product_id','desc')->get();
        $manager_product=view('admin.all_product')->with('all_product',$all_product); //goi lai theo ten file da tao, $all_product ở ngoài sẽ đc gán vào all_product ở trong
        return view('admin_layout')->with('admin.all_product',$manager_product); //
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
        
        $get_image=$request->file('product_image');
        
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension(); //lấy đuôi mở rộng
            $get_image->move('public/uploads/products',$new_image); //dư cái public nè, nó tự động gọi đến public r nên để v là dư nó sẽ tự tạo thêm 1 folder public nữa
            $data['product_image'] = $new_image;
            DB::table('tbl_product')->insert($data);

            Session::put('message','thanh cong hay thanh thu thi khong biet');
            return Redirect::to('add-product');
        }
        $data['product_image']='';
        DB::table('tbl_product')->insert($data);
        Session::put('message','thanh cong hay thanh thu thi khong có hình ảnh sản phẩm');
        return Redirect::to('add-product');
    }
    //update status brand product
    public function unactive_product($product_id) //giống với cái tên bên web.php đặt á $product_id
    {
        DB::table('tbl_product')->where('product_id',$product_id)->update(['product_status'=>1]);
        Session::put('message','Cập nhật trạng thái là ẨN');
        return Redirect::to('all-product');
    }
    public function active_product($product_id)
    {
        DB::table('tbl_product')->where('product_id',$product_id)->update(['product_status'=>0]);
        Session::put('message','Cập nhật trạng thái là HIỆN');
        return Redirect::to('all-product');
    }
    //
    //edit
    public function edit_product($product_id)
    {
        $cate_product = DB::table('tbl_category_product')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->orderby('brand_id','desc')->get();
        $edit_product = DB::table('tbl_product')->where('product_id',$product_id)->get();
        $manager_product=view('admin.edit_product')->with('edit_product',$edit_product)->with('cate_product',$cate_product)->with('brand_product',$brand_product); //goi lai theo ten file da tao, $all_product ở ngoài sẽ đc gán vào all_product ở trong
        return view('admin_layout')->with('admin.edit_product',$manager_product); // cái trang admin_layout sẽ chứa brand_product lun được gán vào biến $manager_product
    }
    public function update_product(Request $request, $product_id)//request dùng để lấy yêu cầu dữ liệu
    {
        $this->CheckLogin();
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_price'] = $request->product_price;
        $data['product_desc'] = $request->product_desc;
        $data['product_content'] = $request->product_content;
        $data['category_id'] = $request->category_id;
        $data['brand_id'] = $request->brand_id;
        $data['product_status'] = $request->product_status;

        $get_image=$request->file('product_image');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension(); //lấy đuôi mở rộng
            $get_image->move('public/uploads/products',$new_image); //dư cái public nè, nó tự động gọi đến public r nên để v là dư nó sẽ tự tạo thêm 1 folder public nữa
            $data['product_image'] = $new_image;
            DB::table('tbl_product')->where('product_id',$product_id)->update($data);

            Session::put('message','thanh cong hay thanh thu thi khong biet');
            return Redirect::to('all-product');
        }
        DB::table('tbl_product')->where('product_id',$product_id)->update($data);
        Session::put('message','thanh cong hay thanh thu thi khong có hình ảnh sản phẩm');
        return Redirect::to('all-product');
    }
    public function delete_product($product_id)
    {
        DB::table('tbl_product')->where('product_id',$product_id)->delete();
        Session::put('message','XÓA sản phẩm thành công rồi nha');
        return Redirect::to('all-product');
    }
    //Hết chức năng admin rồi nha
    public function product_details($product_id)
    {
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();
        $details_product = DB::table('tbl_product')
        ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
        ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
        ->where('tbl_product.product_id',$product_id)->get();
        
        foreach($details_product as $key => $value)
        {
            $category_id = $value->category_id;
        }
        $related_product = DB::table('tbl_product')
        ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
        ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
        ->where('tbl_category_product.category_id',$category_id)->whereNotIn('tbl_product.product_id',[$product_id])->get();

        return view('pages.product.show_details') 
            -> with('cate_product',$cate_product)
            -> with('brand_product',$brand_product)
            -> with('details_product',$details_product)
            -> with('relate',$related_product);
    }
    public function product_all()
    {
        //$this->CheckLogin();
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();
        
        $all_product = DB::table('tbl_product')
        ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
        ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
        ->orderby('tbl_product.product_id','desc')->get();
        return view('pages.product.product_all')
            -> with('cate_product',$cate_product)
            -> with('brand_product',$brand_product)
            -> with('all_product',$all_product); //
    }
}
