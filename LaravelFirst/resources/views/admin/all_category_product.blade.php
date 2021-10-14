@extends('admin_layout')
@section('dashboard')
<div class="container">
  <h2>List Category Product</h2> 
         
  <table class="table table-bordered" id="myTable">
    <thead>
      <tr>
        <th>Name</th>
        <th>Image</th>
        <th>Desc</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      @foreach($all_category_product as $key => $cate_pro)
      <tr>
        <td>{{$cate_pro->category_name}}</td>
        <td><img src="public/uploads/category/{{$cate_pro->category_image}}" height="100" width="100"></td>
        <td>
        {!!$cate_pro->category_desc!!}
          
        </td>
        <td>
          <?php
            if($cate_pro->category_status==0)
            {
          ?>
              <a href="{{URL::to('/unactive-category-product/'.$cate_pro->category_id)}}"><i style="color:blue" class="far fa-eye"></i></a> 
          <?php 
            }else{
          ?>
              <a href="{{URL::to('/active-category-product/'.$cate_pro->category_id)}}"><i class="far fa-eye-slash"></i></span></a>
          <?php }
          ?>
        </td>
        <td>
            <a href="{{URL::to('/edit-category-product/'.$cate_pro->category_id)}}"><i class="fas fa-edit"></i></a>
            <a onclick="return confirm('Xóa giởn hay chơi?? Suy nghĩ lại còn kịp')" href="{{URL::to('/delete-category-product/'.$cate_pro->category_id)}}"><i class="far fa-trash-alt"></i></a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
<?php
    $message = Session::get('message');
    if($message){
      echo $message;
      Session::put('message',null);
    }
    ?> 
            @endsection