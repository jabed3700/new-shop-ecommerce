@extends('layouts.admin')

@section('content')

     <!-- Content Header (Page header) -->
     <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Create product</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('/')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('product.index')}}">product List</a></li>
                <li class="breadcrumb-item active">Create product</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <section class="content">
        <div class="container-fluid">
     <div class="row">
         <div class="col-10 offset-1">
            <div class="card card-primary">
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{route('product.update')}}" method="POST" enctype="multipart/form-data" name="editProductForm"> 
                    @csrf
                  <div class="card-body">
                    <h3 class="text-center text-success">{{Session::get('message')}}</h2>
                    <div class="form-group">
                     <div class="row">
                        <div class="col-md-3">
                            <label for="Name">Category name</label>
                        </div>
                        <div class="col-md-9">
                        {{-- <input type="text" name="name" class="form-control" id="Name" placeholder="product name"> --}}
                          <select name="category_id" id="" class="form-control">
                            <option value="">-- Select Category Name --</option>
                            @foreach ($categories as $category)                          
                            <option value="{{$category->id}}">{{$category ->name}}</option>
                            @endforeach
                          </select>
                        <span class="text-danger">{{$errors->has('category_id') ? $errors->first('category_id'):''}}</span>
                        </div>
                     </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                         <div class="col-md-3">
                             <label for="Name">Brand name</label>
                         </div>
                         <div class="col-md-9">
                         {{-- <input type="text" name="name" class="form-control" id="Name" placeholder="product name"> --}}
                           <select name="brand_id" id="" class="form-control">
                             <option value="">-- Select Brand Name --</option>
                             @foreach ($brands as $brand)
                             <option value="{{$brand->id}}">{{$brand ->brand_name}}</option>
                             @endforeach
                           </select>
                         <span class="text-danger">{{$errors->has('brand_id') ? $errors->first('brand_id'):''}}</span>
                         </div>
                      </div>
                     </div>
                    <div class="form-group">
                      <div class="row">
                          <div class="col-md-3">
                            <label for="product_name">Product Name</label>
                          </div>
                          <div class="col-md-9">
                            <input class="form-control" type="text" name="product_name" id="product_name" placeholder="product name" value="{{$product->product_name}}">
                            <input class="form-control" type="hidden" name="product_id" value="{{$product->id}}">
                            <span class="text-danger">{{$errors->has('product_name') ? $errors->first('product_name'):''}}</span>
                          </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                          <div class="col-md-3">
                            <label for="product_price">Product Price</label>
                          </div>
                          <div class="col-md-9">
                            <input class="form-control" type="number" name="product_price" id="product_price" placeholder="product price" value="{{$product->product_price}}">
                            <span class="text-danger">{{$errors->has('description') ? $errors->first('description'):''}}</span>
                          </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                          <div class="col-md-3">
                            <label for="product_quantity">Product Quantity</label>
                          </div>
                          <div class="col-md-9">
                            <input class="form-control" type="number" name="product_quantity" id="product_quantity" placeholder="product quantity" value="{{$product->product_quantity}}">
                            <span class="text-danger">{{$errors->has('description') ? $errors->first('description'):''}}</span>
                          </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                          <div class="col-md-3">
                            <label for="short_description">Short description</label>
                          </div>
                          <div class="col-md-9">
                            <textarea class="form-control mt-0" name="short_description" id="short_description" cols="30" rows="4" placeholder="Short description">{{$product->short_description}}</textarea>
                            <span class="text-danger">{{$errors->has('description') ? $errors->first('description'):''}}</span>
                          </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                          <div class="col-md-3">
                            <label for="long_description">Long description</label>
                          </div>
                          <div class="col-md-9">
                            <textarea class="form-control mt-0" name="long_description" id="editor" cols="30" rows="4" placeholder="Long description">{{$product->long_description}}</textarea>
                            <span class="text-danger">{{$errors->has('description') ? $errors->first('description'):''}}</span>
                          </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                          <div class="col-md-3">
                            <label for="product_image">Product Image</label>
                          </div>
                          <div class="col-md-9">
                            <input type="file" class="form-control-file" name="product_image" id="product_image"  placeholder="Product image" accept="image/*">
                            <br>
                            <img src="{{asset($product->product_image)}}" width="80" height="80" alt="">
                            <span class="text-danger">{{$errors->has('product_image') ? $errors->first('product_image'):''}}</span>
                          </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                          <div class="col-md-3">
                            <label for="exampleInputPassword1">Pushlication status</label>
                          </div>
                          <div class="col-md-9">
                           <label><input type="radio" {{$product->publication_status==0 ? 'checked':''}} name="publication_status" value="0">Published
                          </label>
                           <label><input {{$product->publication_status==1 ? 'checked':''}} type="radio" name="publication_status" value="1">Unpublished
                          </label>
                          <br>
                          <span class="text-danger">{{$errors->has('publication_status') ? $errors->first('publication_status'):''}}</span>
                         
                          </div>
                      </div>
                    </div>
                      <div class="form-group">
                        <div class="row">
                            <div class="col-md-9 offset-md-3">
                              {{-- <input type="submit" class="form-control" value="submit" class="btn btn-primary"> --}}
                              <button class="btn btn-primary btn-block">Submit</button>
                            </div>
                        </div>
                      </div>
                  </div>
        
        
                </form>
              </div>
         </div>
     </div>
    </div>
      </section>

      <script>
        document.forms['editProductForm'].elements['category_id'].value= '{{$product->category_id}}';
        document.forms['editProductForm'].elements['brand_id'].value= '{{$product->brand_id}}';
      </script>
@endsection 