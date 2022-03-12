@extends('admin_layout')
@section('dashboard')
<div class="container">
  <h2 class="main-title">List Product</h2> 
  <div class="users-table table-wrapper">
  <table class="posts-table" id="myTable">
    <thead>
      <tr class="users-table-info">
        <th>Name</th>
        <th>Image</th>
        <th>Price</th>
        <th>Description</th>
        <th>Content</th>
        <th>Category Product</th>
        <th>Brand Product</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      @foreach($all_product as $key => $pro)
      <tr>
        <td>{{$pro->product_name}}</td>
        <td><img src="public/uploads/products/{{$pro->product_image}}" height="100" width="100"></td>
        <td>{{$pro->product_price}}</td>
        <td>{!!$pro->product_desc!!}</td>
        <td>{!!$pro->product_content!!}</td>
        <td>{{$pro->category_name}}</td>
        <td>{{$pro->brand_name}}</td>
        <td>
          <?php
            if($pro->product_status==0)
            {
          ?>
              <a href="{{URL::to('/unactive-product/'.$pro->product_id)}}"><i style="color:blue" class="far fa-eye"></i></a> 
          <?php 
            }else{
          ?>
              <a href="{{URL::to('/active-product/'.$pro->product_id)}}"><i class="far fa-eye-slash"></i></span></a>
          <?php }
          ?>
        </td>
        <td>
            <a href="{{URL::to('/edit-product/'.$pro->product_id)}}"><i class="fas fa-edit"></i></a>
            <a onclick="return confirm('Xóa giởn hay chơi?? Suy nghĩ lại còn kịp')" href="{{URL::to('/delete-product/'.$pro->product_id)}}"><i class="far fa-trash-alt"></i></a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
</div>

<?php
    $message = Session::get('message');
    if($message){
      echo $message;
      Session::put('message',null);
    }
    ?> 
            @endsection