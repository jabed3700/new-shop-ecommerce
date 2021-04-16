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

                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>SL No</th>
                          <th>Category Name</th>
                          <th>Brand Name</th>
                          <th>product Name</th>
                          <th>product Image</th>
                          <th>product Price</th>
                          <th>product Quantity</th>
                          <th>Publication_status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php($i=1)
                        @foreach ($products as $product)
                        <tr>
                          <td>{{$i++}}</td>
                          <td>{{$product->name}}</td>
                          <td>{{$product->brand_name}}</td>
                          <td>{{$product->product_name}}</td>                     
                          <td><img src="{{asset($product->product_image)}}" alt="" style="width:60px"></td>                     
                          <td>{{$product->product_price}}</td>                     
                          <td>{{$product->product_quantity}}</td>                     
                          <td>{{$product->publication_status == 1 ? 'published':'unpublished'}}</td>                     
                          <td>demodemo</td>  
                        </tr>
                        @endforeach                   
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
    </div>
      </section>

@endsection