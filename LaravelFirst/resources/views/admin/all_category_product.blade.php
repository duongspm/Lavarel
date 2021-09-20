@extends('admin_layout')
@section('dashboard')
<div class="container">
  <h2>List Category Product</h2> 
         
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Name</th>
        <th>Desc</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      @foreach($all_category_product as $key => $cate_pro)
      <tr>
        <td>{{$cate_pro->category_name}}</td>
        <td>
        {{$cate_pro->category_desc}}
          
        </td>
        <td>
          <?php
            if($cate_pro->category_status==0)
            {
          ?>
              <a href="{{URL::to('/unactive-category-product/'.$cate_pro->category_id)}}"><span class="fa fa-thumbs-up"></span></a> 
          <?php 
            }else{
          ?>
              <a href="{{URL::to('/active-category-product/'.$cate_pro->category_id)}}"><span  style="color:#fff"  class="fa fa-thumbs-down"></span></a>
          <?php }
          ?>
        </td>
        <td>
            <a>
            <a>
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