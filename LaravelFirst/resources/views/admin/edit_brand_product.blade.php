@extends('admin_layout')
@section('dashboard')
<div class="container">
  <h2>Update Brand Product</h2>
  @foreach($edit_brand_product as $key => $edit_value)
  <form action="{{URL::to('/update-brand-product/'.$edit_value->brand_id)}}" method="post" enctype="multipart/form-data">
  {{csrf_field()}}  
  <div class="form-group">
      <labe>Brand Product Name</label>
      
      <input value="{{$edit_value->brand_name}}" type="text" class="form-control" placeholder="Brand Product Name" name="brand_product_name">
    </div>
    <div class="form-group">
      <labe> Image</label>
      <input type="file" class="form-control" name="brand_image">
      <img src="{{URL::to('public/uploads/brands/'.$edit_value->brand_image)}}" width="200" height="200">
    </div>
    <div class="form-group">
      <label for="pwd">Description:</label>
      <textarea id="ckeditor6"  class="form-control" rows="5"name="brand_product_desc">{{$edit_value->brand_desc}}</textarea>
    </div>
    <div class="form-group form-check">
    <!-- <label >Status:</label>
        <select name="brand_product_status" class="custom-select">
            
            <option value="0">Hiện</option>
            <option value="1">Ẩn</option>
        </select>
    </div> -->
    <button type="submit" name="update_brand_product" class="btn btn-success">Submit</button>
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