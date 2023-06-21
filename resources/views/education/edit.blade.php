@extends('layouts.main')

@section('title', 'Education Edit')
    
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
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Pendidikan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/education-update/{{ $edu->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="image" class="col-sm-2 col-form-label">Logo Instansi</label>
                        <div class="col-sm-4">
                        <input type="file" class="dropify" name="image" data-default-file="{{ asset('storage/education/'.$edu->image) }}" data-height="150" data-width="100" data-max-file-size="1M">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lokasi">Lokasi Pendidikan</label>
                        <input type="text" value="{{$edu->lokasi }}" class="form-control" name="lokasi" id="lokasi" placeholder="lokasi">
                    </div>
                    <div class="form-group">
                        <label for="gelar">Gelar Pendidikan</label>
                        <input type="text" value="{{$edu->gelar }}" class="form-control" name="gelar" id="gelar" placeholder="gelar">
                    </div>
                    <div class="form-group">
                        <label for="text">IPK</label>
                        <div class="row">
                            <div class="col-lg-1">
                                <input type="text" class="form-control" value="{{ $edu->ipk }}" name="ipk" id="ipk" placeholder="...">
                            </div>
                            <p>/</p>
                            <div class="col-lg-1">
                                <input type="text" class="form-control" value="4.0" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <a href="#" class="btn btn-danger btn delete-edu mx-3" data-id="{{ $edu->id }}">hapus</i>
                </a>
                <div class="card-footer" style="display: inline">
                  <button type="submit" class="btn btn-primary">Edit</button>
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