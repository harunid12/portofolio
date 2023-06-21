@extends('layouts.main')

@section('title', 'user edit')
    
@section('content')

    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-10 ">
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                </div>
            @endif
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/user-update/{{ $user->username }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" value="{{ $user->name }}" class="form-control" name="name" id="name" placeholder="name" readonly>
                  </div>
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" value="{{ $user->username }}" class="form-control" name="username" id="username" placeholder="username" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleSelectRounded0">Status</label>
                    <select class="custom-select rounded-0" name="status" id="exampleSelectRounded0">
                      <option value="{{ $user->status }}">{{ $user->status }}</option>
                      @if ($user->status == 'active')
                          <option value="inactive">inactive</option>
                      @else
                          <option value="active">active</option>
                      @endif
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
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection