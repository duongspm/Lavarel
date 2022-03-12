@extends('admin_layout')
@section('dashboard')
<div class="container">
  <h2 class="main-title">Add Product</h2>
  <form class="form" action="{{URL::to('/save-product')}}" method="post" enctype="multipart/form-data">
  {{csrf_field()}}  
  <div class="form-group">
      <labe class="form-label-wrapper"> 
        <p class="form-label">Name</p>
      <input type="text" class="form-input" placeholder="Name product" name="product_name">
      </label>
    </div>
    <div class="form-group">
      <labe> Image</label>
      <input type="file" class="form-control" name="product_image">
    </div>
    <div class="form-group">
      <labe> Price</label>
      <input type="number" class="form-control" name="product_price">
    </div>
    <div class="form-group">
      <label for="pwd">Description:</label>
      <textarea id="ckeditor" class="form-control" rows="5" placeholder="Description" name="product_desc"></textarea>
    </div>
    <div class="form-group">
      <label for="pwd">Content:</label>
      <textarea  id="ckeditor1" class="form-control" rows="5" placeholder="Nội dung" name="product_content"></textarea>
    </div>
    <div class="form-group form-check">
    <label >Category Product:</label>
        <select name="category_id" class="custom-select">
            @foreach($cate_product as $key=>$cate)
            <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group form-check">
    <label >Brand Product:</label>
        <select name="brand_id" class="custom-select">
            @foreach($brand_product as $key=>$brand)
            <option value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group form-check">
    <label >Status:</label>
        <select name="product_status" class="custom-select">
            
            <option value="0">Nổi bật</option>
            <option value="1">Nổi bật không</option>
        </select>
    </div>
    <button type="submit" name="add_product" class="btn btn-success">Submit</button>
    <div class="alert alert-success">
      <strong></strong> <?php
    $message = Session::get('message');
    if($message){
      echo $message;
      Session::put('message',null);
    }
    ?>
   
  </form>
</div>
@endsection