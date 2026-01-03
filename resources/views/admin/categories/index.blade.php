@extends('admin.layout.main')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      
  <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Categories Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Category name</th>
                      <th>Category icon</th>
                      <th>actions</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($categories as $category)
                        <tr>
                                            <td>{{ $category->name }} </td>
                                            <td>
                                              <div class="">{{ $category->icon }}</div>
                                            </td>
                                            <td>
                                              <div class="d-flex gap-2">
    <!-- زر التعديل كـ لينك -->
    <a href="{{route('edit_route',$category->id)}}" class="btn btn-primary btn-sm">Edit</a>

    <!-- زر الحذف -->
    @if($category->deleted_at == null)
      <form action="{{route('delete_route',$category->id)}}" method="Post">
          @csrf
          <button type="submit" class="btn btn-danger btn-sm">Delete</button>
      </form>
    @else
      <form action="{{route('restore_route',$category->id)}}" method="Post">
          @csrf
          <button type="submit" class="btn btn-warning btn-sm">Restore</button>
      </form>
    @endif
    
</div>
                                            </td>
                                        </tr>
                      @endforeach                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>    </section>
    <!-- /.content -->
  </div>
@endsection