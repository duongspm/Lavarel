@extends('admin_layout')
@section('dashboard')
<div class="container">
  <h2>Add Brand Product</h2>
  <form action="{{URL::to('/save-brand-product')}}" method="post">
  {{csrf_field()}}  
  <div class="form-group">
      <labe>Brand Name</label>
      
      <input type="text" class="form-control" placeholder="Category brand Name" name="brand_product_name">
    </div>
    <div class="form-group">
      <label for="pwd">Description:</label>
      <textarea class="form-control" rows="5" placeholder="Description" name="brand_product_desc"></textarea>
    </div>
    <div class="form-group form-check">
    <label >Status:</label>
        <select name="brand_product_status" class="custom-select">
            
            <option value="0">Hiện</option>
            <option value="1">Ẩn</option>
        </select>
    </div>
    <button type="submit" name="add_brand_product" class="btn btn-primary">Submit</button>
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