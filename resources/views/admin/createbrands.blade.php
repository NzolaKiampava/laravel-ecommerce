@extends('admin.layouts.template')
@section('pagetitle')
Create Brands
@endsection();
@section('content')
@extends('admin.layouts.template')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
              <h4>Create Brands</h4>
            </div>
            <form action="" method="POST">
                <div class="card-body">
                    <div class="form-group">
                      <label for="brand_name">Enter Brand Name</label>
                      <input type="text" class="form-control" id="brand_name" name="brand_name" placeholder="Electronics">
                    </div>
                </div>
            </form>
            <div class="card-footer">
              <button class="btn btn-primary">Create Brands</button>
            </div>
        </div>
    </div>
</div>
@endsection();

@endsection();
