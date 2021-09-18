<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;


class MyController extends Controller
{
    //
    public function Hello()
    {
        echo "<h1> Hello </h1>";
    }
    public function Duongg($ten)
    {
        echo "<h1> Hello: </h1>".$ten;
        return redirect()->route('MyRoute');
    }
    public function GetURL(Request $request)
    {
        //return $request->path();
        //return $request->url();

        /*if($request->isMethod('get'))
            echo "<h1>Đây là phương thức get";
        else
            echo "<h1>Đây không phải phương thức get";*/
        if($request->is('M*'))
            echo "<h1>Có chữ M";
        else
            echo "<h1>Không có chữ M";    
    }
    public function postForm(Request $request)
    {
        echo "Tên của ny bạn là: ";
        echo $request->HoTen;
    }

    public function setCookie()
    {
        $response = new Response;
        $response->withCookie('Duong','Tran Van',0.1);
        echo "Đang sét Cookie";
        return $response;
    }
    public function getCookie(Request $request)
    {
        echo "Cookie của bạn là: ";
        return $request->cookie('Duong');
    }

    public function postFile(Request $request)
    {
        if($request->hasFile('myFile'))
        {
            $file = $request->file('myFile');
            $filename = $file -> getClinetOriginalName('myFile');
            echo $filename;
            $file->move('img','myfile.jpg');
        }
        else
            echo "Chưa có File";
    }
    public function getJson()
    {
        $array= ['Laravel','Php','ASP.Net','HTML','CSS'];
        return response()->json($array); 
    }
    public function myView()
    {
        return view('myView'); 
    }
    //gọi view ở trong folder
    public function sonView()
    {
        return view('viewcon.viewcon'); 
    }

    //truyền tham số sang view
    public function Time($t)
    {
        return view('myView',['t'=>$t]); 
    }
}
