@extends('admin.layouts.template')
@section('pagetitle')
Add Product
@endsection();
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
              <h4>Add Product</h4>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                      <label for="category_name">Enter Product Name</label>
                      <input type="text" class="form-control" id="product_name" name="product_name" placeholder="IPhone 13 Pro Max">
                    </div>
                </div>

                <div class="card-body">
                    <div class="form-group">
                      <label for="product_price">Enter Product Price</label>
                      <input type="number" class="form-control" id="product_price" name="product_price">
                    </div>
                </div>

                <div class="card-body">
                    <div class="form-group">
                      <label for="product_short_des">Enter Short Description</label>
                      <textarea name="product_short_des" id="product_short_des" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                </div>

                <div class="card-body">
                    <div class="form-group">
                      <label for="product_long_des">Enter Long Description</label>
                      <textarea name="product_long_des" id="product_long_des" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                </div>

                <div class="card-body">
                    <div class="form-group">
                      <label for="product_img">Select Product Category</label>
                      <select name="product_category_id" id="product_category_id" class="form-control">
                        <option selected>Select One</option>
                      </select>
                    </div>
                </div>

                <div class="card-body">
                    <div class="form-group">
                      <label for="product_subcategory_id">Select Product Sub Category</label>
                      <select name="product_subcategory_id" id="product_subcategory_id" class="form-control">
                        <option selected>Select One</option>
                      </select>
                    </div>
                </div>

                <div class="card-body">
                    <div class="form-group">
                      <label for="product_img">Select Product Image</label>
                      <input type="file" class="form-control" id="product_img" name="product_img">
                    </div>
                </div>

                <livewire:categorysubcategorydropdown />

                @php
                    $brands = App\Models\Brand::get();
                @endphp

                <div class="card-body">
                    <div class="form-group">
                      <label for="product_brand_id">Select Product Brand</label>
                      <select name="product_brand_id" id="product_brand_id" class="form-control">
                        <option selected>Select One</option>
                        @foreach ($brands as $brand)
                            <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                        @endforeach
                      </select>
                    </div>
                </div>

                <div class="card-body">
                    <div class="form-group">
                      <label for="product_size">Enter Product Size</label>
                      <input type="text" class="form-control" id="product_size" name="product_size" placeholder="XL/36/None">
                    </div>
                </div>

                <div class="card-body">
                    <div class="form-group">
                      <label for="product_color">Select Product Color</label>
                      <input type="color" id="product_color" name="product_color">
                    </div>
                </div>

                <div class="card-body">
                    <div class="form-group">
                      <label for="quantity">Enter Quantity</label>
                      <input type="number" class="form-control" id="quantity" name="quantity">
                    </div>
                </div>

                <div class="card-footer">
                <button type="submit" class="btn btn-primary">Create Product</button>
                </div>
            </form>
          </div>
    </div>
</div>
@endsection();
