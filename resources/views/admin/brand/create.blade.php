@extends('layouts.admin')

@section('content')
     <!-- Content Header (Page header) -->
     <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Create brand</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('/')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('brand.index')}}">brand List</a></li>
                <li class="breadcrumb-item active">Create brand</li>
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
                <form role="form" action="{{route('brand.store')}}" method="POST">
                    @csrf
                  <div class="card-body">
                    <h3 class="text-center text-success">{{Session::get('message')}}</h2>
                    <div class="form-group">
                     <div class="row">
                        <div class="col-md-3">
                            <label for="Name">Name</label>
                        </div>
                        <div class="col-md-9">
                        <input type="text" name="name" class="form-control" id="Name" placeholder="brand name">
                        <span class="text-danger">{{$errors->has('name') ? $errors->first('name'):''}}</span>
                        </div>
                     </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                          <div class="col-md-3">
                            <label for="Description">Description</label>
                          </div>
                          <div class="col-md-9">
                            <textarea class="form-control" name="description" id="Description" cols="30" rows="4" placeholder="brand description"></textarea>
                            <span class="text-danger">{{$errors->has('description') ? $errors->first('description'):''}}</span>
                          </div>
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                              <label for="exampleInputPassword1">Pushlish </label>
                            </div>
                            <div class="col-md-9">
                             <label><input type="radio"  name="publication_status" value="0">Published
                            </label>
                             <label><input type="radio" name="publication_status" value="1">Unpublished
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

@endsection