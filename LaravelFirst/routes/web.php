<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

// Route::get('HoTen/{ten}', function ($ten) {
//     return "Tên của bạn là: ".$ten;
// });

// Route::get('Laravel/{ngay}',function($ngay){
//     echo "Duongg: ".$ngay;
// })->where(['ngay'=>'[0-9]+']);

// //Định danh Route
// Route::get('Route1',['as'=>'MyRoute',function(){
//     echo "Hé lô các bợn";
// }]);

// Route::get('Route2',function(){
//     echo "Hé lô các bợn Route2";
// })->name('MyRoute2');

// Route::get('GoiTen',function(){
//     return redirect()->route('MyRoute2');
// });

//Gọi Controller

// Route::get('GoiController','MyController@Hello');

// Route::get('ThamSo/{ten}','MyController@Duongg');

//URL

// Route::get('MyRequest','MyController@GetURL');

// //Gửi nhận dữ liệu với request

// Route::post('postForm',['as'=>'postForm','uses'=>'MyController@postForm']);
// Route::get('getForm',function(){
//     return view('postForm');
// });
//Cookie

// Route::get('setCookie','MyController@setCookie');
// Route::get('getCookie','MyController@getCookie');

// //update File
// Route::get('uploadFile',function(){
//     return view('postFile');
// });
// Route::post('postFile',['as'=>'postFile','uses'=>'MyController@postFile']);

// //Json
// Route::get('getJson','MyController@getJson');

// //view
// Route::get('myView','MyController@myView');
// //view trong folder
// Route::get('sonView','MyController@sonView');

// //truyề tham số sang view
// Route::get('Time/{t}','MyController@Time');

//dùng chung dữ liệu
        //tên tham số muốn dùng//giá trị của nó
// View::share('TenThamSo','Duongg 22 chuổi được dùng chung');

// //blade template, file con lấy giao diện từ file master
// Route::get('blade',function()
// {
//     return view('pages.laravel');
// });
// Route::get('blade/asp',function()
// {
//     return view('pages.asp');
// });
// Route::get('blade/double',function()
// {
//     return view('pages.double');
// });
// Route::get('blade/master',function()
// {
//     return view('layouts.master');
// });

//---User
Route::get('/','MyController@index');
Route::get('/home','MyController@index');

//---Admin
Route::get('/admin-login','AdminController@login');//Trang đăng nhập của nó (admin) là {admin-login} , của nó (index) là {login}
Route::get('/index','AdminController@index');//Trang chủ admin , của nó là (dashboard) mình là {index}, của nó là (show_dashboard) mình là {index}
Route::get('/logout','AdminController@logout');//Đăng xuất nè
Route::post('/admin-dashboard','AdminController@dashboard'); //Giống y chang

//Category Product
Route::get('/add-category-product','CategoryProduct@add_category_product');
Route::get('/all-category-product','CategoryProduct@all_category_product'); // ten ham function nen de dau gach duoi " _ "
Route::post('/save-category-product','CategoryProduct@save_category_product');
    //update status category product
    Route::get('/unactive-category-product/{category_product_id}','CategoryProduct@unactive_category_product');//tạo thêm môt tham số { category_product_id } tên gì cũng đc để dễ phân biệt
    Route::get('/active-category-product/{category_product_id}','CategoryProduct@active_category_product');
