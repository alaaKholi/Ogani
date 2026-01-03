@extends('admin.layout.main')

@section('content')
     <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Store</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Store</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Store</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{route('update_store_route',$store->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="store_name">Store Name</label>
                    <input type="text" class="form-control" id="store_name" placeholder="Enter store name" name="store_name" value="{{$store->name}}">
                  </div>
                  
                  <div class="form-group">
                    <label for="store_address">Store Address</label>
                    <input type="text" class="form-control" id="store_address" placeholder="Enter store address" name="store_address" value="{{$store->address}}">
                  </div>

                  <div class="form-group">
                    <label for="store_email">Store Email</label>
                    <input type="email" class="form-control" id="store_email" placeholder="Enter store email" name="store_email" value="{{$store->email}}">
                  </div>

                  <div class="form-group">
                    <label for="store_mobile">Store mobile</label>
                    <input type="number" class="form-control" id="store_mobile" placeholder="Enter store mobile" name="store_mobile" value="{{$store->mobile}}">
                  </div>                  
                  
                   <div class="form-group">
                    <label for="store_mobile">Store Category</label>
                    <select name="category_id">
                       @foreach ($categories as $c )
                            <option  value="{{$c->id}}" @if ($store->category_id == $c->id) selected @endif>{{$c->name}}</option>
                       @endforeach
                    </select>
                  </div>                  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            

          
           

          </div>
          <!--/.col (left) -->
          <!-- right column -->
    
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection