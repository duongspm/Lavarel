@extends('admin_layout')
@section('dashboard')
<div class="container">
  <h2>Update Category Product</h2>
  @foreach($edit_category_product as $key => $edit_value)
  <form action="{{URL::to('/update-category-product/'.$edit_value->category_id)}}" method="post" enctype="multipart/form-data">
  {{csrf_field()}}  
  <div class="form-group">
      <labe>Category Product Name</label>
      <input value="{{$edit_value->category_name}}" type="text" class="form-control" placeholder="Category Product Name" name="category_product_name">
    </div>
    <div class="form-group">
      <labe> Image</label>
      <input type="file" class="form-control" name="category_image">
      <img src="{{URL::to('public/uploads/category/'.$edit_value->category_image)}}" width="200" height="200">
    </div>
    <div class="form-group">
      <label for="pwd">Description:</label>
      <textarea class="form-control" rows="5"name="category_product_desc">{{$edit_value->category_desc}}</textarea>
    </div>
    <div class="form-group form-check">
    <!-- <label >Status:</label>
        <select name="category_product_status" class="custom-select">
            
            <option value="0">Hiện</option>
            <option value="1">Ẩn</option>
        </select>
    </div> -->
    <button type="submit" name="update_category_product" class="btn btn-success">Submit</button>
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