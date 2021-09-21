@extends('admin_layout')
@section('dashboard')
<div class="container">
  <h2>Add Product</h2>
  <form action="{{URL::to('/save-product')}}" method="post">
  {{csrf_field()}}  
  <div class="form-group">
      <labe> Name</label>
      <input type="text" class="form-control" placeholder=" Name" name="product_name">
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
      <textarea class="form-control" rows="5" placeholder="Description" name="product_desc"></textarea>
    </div>
    <div class="form-group">
      <label for="pwd">Content:</label>
      <textarea class="form-control" rows="5" placeholder="Nội dung" name="product_content"></textarea>
    </div>
    <div class="form-group form-check">
    <label >Category Product:</label>
        <select name="product_cate" class="custom-select">
            @foreach($cate_product as $key=>$cate)
            <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group form-check">
    <label >Brand Product:</label>
        <select name="product_brand" class="custom-select">
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
    <button type="submit" name="add_product" class="btn btn-primary">Submit</button>
    <?php
    $message = Session::get('message');
    if($message){
      echo $message;
      Session::put('message',null);
    }
    ?>
  </form>
</div>
@endsection