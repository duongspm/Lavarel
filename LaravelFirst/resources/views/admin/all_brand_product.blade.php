@extends('admin_layout')
@section('dashboard')
<div class="container">
  <h2>List Brand</h2> 
         
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
      @foreach($all_brand_product as $key => $cate_pro)
      <tr>
        <td>{{$cate_pro->brand_name}}</td>
        <td><img src="public/uploads/brands/{{$cate_pro->brand_image}}" height="100" width="100"></td>
        <td>
          {!!$cate_pro->brand_desc!!}
        </td>
        <td>
          <?php
            if($cate_pro->brand_status==0)
            {
          ?>
              <a href="{{URL::to('/unactive-brand-product/'.$cate_pro->brand_id)}}"><i style="color:blue" class="far fa-eye"></i></a> 
          <?php 
            }else{
          ?>
              <a href="{{URL::to('/active-brand-product/'.$cate_pro->brand_id)}}"><i class="far fa-eye-slash"></i></span></a>
          <?php }
          ?>
        </td>
        <td>
            <a href="{{URL::to('/edit-brand-product/'.$cate_pro->brand_id)}}"><i class="fas fa-edit"></i></a>
            <a onclick="return confirm('Xóa giởn hay chơi?? Suy nghĩ lại còn kịp')" href="{{URL::to('/delete-brand-product/'.$cate_pro->brand_id)}}"><i class="far fa-trash-alt"></i></a>
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