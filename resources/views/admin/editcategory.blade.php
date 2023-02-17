@extends('admin.layouts.template')
@section('pagetitle')
Create Category
@endsection();
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
              <h4>Create Category</h4>
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
            <form action="{{ route('admin.updatecategory') }}" method="POST">
                @csrf
                <div class="card-body">
                    <input type="hidden" value="{{$category_info->id}}" name="category_id">
                    <div class="form-group">
                      <label for="category_name">Enter Category Name</label>
                      <input type="text" class="form-control" id="category_name" name="category_name" placeholder="Electronics" value="{{$category_info->category_name}}">
                    </div>
                </div>

                <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update Category</button>
                </div>
            </form>
          </div>
    </div>
</div>
@endsection();

