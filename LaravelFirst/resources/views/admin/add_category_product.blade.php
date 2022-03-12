@extends('admin_layout')
@section('dashboard')
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<div class="container">
  <h2>Add Category Product</h2>
  <form action="{{URL::to('/save-category-product')}}" method="post" enctype="multipart/form-data">
  {{csrf_field()}}  
  <div class="form-group">
      <labe>Category Product Name</label>
      
      <input type="text" class="form-control" placeholder="Category Product Name" name="category_product_name">
    </div>
    <div class="form-group">
      <labe> Image</label>
      <input type="file" class="form-control" name="category_image">
    </div>
    <div class="form-group">
      <label for="pwd">Description:</label>
      <textarea id="ckeditor3" class="form-control" rows="5" placeholder="Description" name="category_product_desc"></textarea>
    </div>
    <div class="form-group form-check">
    <label >Status:</label>
        <select name="category_product_status" class="custom-select">
            
            <option value="0">Hiện</option>
            <option value="1">Ẩn</option>
        </select>
    </div>
    <button type="submit" name="add_category_product" class="btn btn-success">Submit</button>
    <br>
    <div class='alert alert-success'>
        <strong></strong> 
        <?php
          $message = Session::get('message');
          if($message){
            echo  $message;
            Session::put('message',null);
          }
          ?> 
        </div>
    
  </form>
</div>
@endsection

