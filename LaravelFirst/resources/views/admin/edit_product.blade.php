@extends('admin_layout')
@section('dashboard')
<div class="container">
  <h2>Update Product</h2>
  @foreach($edit_product as $key => $pro)
  <form action="{{URL::to('/update-product/'.$pro->product_id)}}" method="post" enctype="multipart/form-data">
  {{csrf_field()}}  
  <div class="form-group">
      <labe> Name</label>
      <input type="text" class="form-control" value="{{$pro->product_name}}" name="product_name">
    </div>
    <div class="form-group">
      <labe> Image</label>
      <input type="file" class="form-control" name="product_image">
      <img src="{{URL::to('public/uploads/products/'.$pro->product_image)}}" width="200" height="200">
    </div>
    <div class="form-group">
      <labe> Price</label>
      <input type="number" value="{{$pro->product_price}}" class="form-control" name="product_price">
    </div>
    <div class="form-group">
      <label for="pwd">Description:</label>
      <textarea class="form-control" rows="5" name="product_desc">{{$pro->product_desc}}</textarea>
    </div>
    <div class="form-group">
      <label for="pwd">Content:</label>
      <textarea class="form-control" rows="5" name="product_content">{{$pro->product_content}}</textarea>
    </div>
    <div class="form-group form-check">
    <label >Category Product:</label>
        <select name="category_id" class="custom-select">
            @foreach($cate_product as $key=>$cate)
            @if($cate->category_id==$pro->category_id)
            <option selected value="{{$cate->category_id}}">{{$cate->category_name}}</option>
            @else
            <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
            @endif
            @endforeach
        </select>
    </div>
    <div class="form-group form-check">
    <label >Brand Product:</label>
        <select name="brand_id" class="custom-select">
            @foreach($brand_product as $key=>$brand)
            
            @if($brand->brand_id==$pro->brand_id)
            <option selected value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
            @else
            <option value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
            @endif
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
    <button type="submit" name="add_product" class="btn btn-primary">Update</button>
    <?php
    $message = Session::get('message');
    if($message){
      echo $message;
      Session::put('message',null);
    }
    ?>
  </form>
  @endforeach
</div>
@endsection