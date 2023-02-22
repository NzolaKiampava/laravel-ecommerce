@extends('admin.layouts.template')
@section('pagetitle')
Create SubCategory
@endsection();
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
              <h4>Create Sub Category</h4>
            </div>
            <form action="{{route('admin.storesubcategory')}}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                      <label for="subcategory_name">Enter Sub Category Name</label>
                      <input type="text" class="form-control" id="subcategory_name" name="subcategory_name" placeholder="Mobile">
                    </div>

                    @php
                    //taking directly from database
                        $categories = App\Models\Category::where('status','active')->get();
                    @endphp

                    <div class="form-group">
                        <label for="category_name"></label>
                        <select name="category_id" class="form-control form-control-lg">
                            <option selected>Select one....</option>
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->category_name}}</option>
                            @endforeach
                        </select>
                    </div>

                </div>

                <div class="card-footer">
                <button type="submit" class="btn btn-primary">Create Sub Category</button>
                </div>
            </form>
          </div>
    </div>
</div>
@endsection();
