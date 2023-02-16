@extends('admin.layouts.template')
@section('pagetitle')
All Categories
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
                        <th>Category Name</th>
                        <th>Slug</th>
                        <th>IMAGES</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->category_name}}</td>
                                <td>{{$category->slug}}</td>
                                <td>
                                    <img alt="image" src="  {{ asset('dashboard_asset/assets/img/users/user-5.png') }}" width="35">
                                </td>
                                <td>
                                    @if ($category->status == 'active')
                                        <div class="badge badge-success badge-shadow">Active</div>
                                    @else
                                        <div class="badge badge-danger badge-shadow">No Active</div>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.editcategory', $category->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
