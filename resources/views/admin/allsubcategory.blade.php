@extends('admin.layouts.template')
@section('pagetitle')
All SubCategories
@endsection();
@section('content')
<section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Basic DataTables</h4>
            </div>
            @if (session()->has('message'))
                <div class="alert alert-success">
                  {{session()->get('message')}}
                </div>
            @endif
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-md" id="table-1">
                  <thead>
                    <tr>
                      <th class="text-center">
                        #
                      </th>
                      <th>SubCategory Name</th>
                      <th>Slug</th>
                      <th>Product Count</th>
                      <th>Category Name</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($subcategories as $subcategory)
                        <tr>
                            <td>{{$subcategory->id}}</td>
                            <td>{{$subcategory->subcategory_name}}</td>
                            <td>{{$subcategory->slug}}</td>
                            <td>{{$subcategory->product_count}}</td>
                            <td>{{$subcategory->category_name}}</td>
                            <td>
                                @if ($subcategory->status == 'active')
                                    <div class="badge badge-success badge-shadow">Active</div>
                                @else
                                    <div class="badge badge-danger badge-shadow">No Active</div>
                                @endif
                            </td>
                            <td>
                                <a href="" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
@endsection();
