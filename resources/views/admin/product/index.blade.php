@extends('layouts.admin')

@section('content')
     <!-- Content Header (Page header) -->
     <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">product</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('/')}}">Home</a></li>
                <li class="breadcrumb-item active">Create List</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                  <div class="d-flex justify-content-between align-items-center">
                    <h3 class="card-title">product List</h3>
                    <a href="{{route('product.create')}}" class="btn btn-primary">Create</a>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                  <h3 class="text-center text-success mb-0 mt-3">{{Session::get('message')}}</h3>

                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>SL No</th>
                        <th>product name</th>
                        <th>Banrad description</th>
                        <th>Publication_status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      {{-- @php($i=1)
                      @foreach ($products as $product) --}}
                      <tr>
                        <td>demo</td>
                        <td>demo</td>
                        <td>demo</td>
                        <td>demo</td>
                        <td>

                          {{-- @if($product->publication_status==0)
                          <a href="{{route('product.unpublished', ['id'=>$product->id] )}}" class="btn btn-primary btn-sm">
                            <span class="fas fa-arrow-up"></span>
                          </a>
                          @else
                          <a href="{{route('product.published',['id'=>$product->id])}}" class="btn btn-warning btn-sm">
                            <span class="fas fa-arrow-down"></span>
                          </a>
                          @endif

                          <a href="{{route('product.edit',['id'=>$product->id])}}" class="btn btn-success btn-sm">
                            <span class="fas fa-edit"></span>
                          </a>
                          <a href="{{route('product.delete',['id'=>$product->id])}}" class="btn btn-danger btn-sm">
                            <span class="fas fa-trash"></span>
                          </a> --}}
                          demo
                        </td>
                      </tr>
                      {{-- @endforeach --}}
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
    </div>
      </section>

@endsection