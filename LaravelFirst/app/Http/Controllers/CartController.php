<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Session;
use Cart;
session_start();

class CartController extends Controller
{
    //
    public function save_cart(Request $request)
    {
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();

        $productId = $request->productid_hidden;
        $quanlity = $request->product_quanity;

        $product_info = DB::table('tbl_product')->where('product_id',$productId)->first();

        Cart::add('293ad','Product 1',1,9.9,550);
        //Cart::destroy();
        return view('pages.cart.show_cart')->with('cate_product',$cate_product)-> with('brand_product',$brand_product);
    }
}
