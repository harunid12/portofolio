@extends('layouts.main')

@section('title', 'Sertification Edit')
    
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
                <h3 class="card-title">Edit Sertifikasi</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/sertification-update/{{ $sertification->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="image" class="col-sm-2 col-form-label">Image Sertifikasi</label>
                        <div class="col-sm-4">
                        <input type="file" class="dropify" name="image" data-default-file="{{ asset('storage/sertification/'.$sertification->image) }}" data-height="150" data-width="100" data-max-file-size="1M">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lokasi">Link Sertifikasi</label>
                        <input type="text" value="{{$sertification->link }}" class="form-control" name="link" id="link">
                    </div>
                    <div class="form-group">
                        <label for="gelar">Judul Sertifikasi</label>
                        <input type="text" value="{{$sertification->judul }}" class="form-control" name="judul" id="judul">
                    </div>
                    <div class="form-group">
                        <label for="gelar">Deskripsi</label>
                        <input type="text" value="{{$sertification->deskripsi }}" class="form-control" name="deskripsi" id="deskripsi">
                    </div>
                    <div class="form-group">
                        <label for="gelar">Tahun</label>
                        <input type="text" value="{{$sertification->tahun }}" class="form-control" name="tahun" id="tahun">
                    </div>
                </div>
                <!-- /.card-body -->

                <a href="#" class="btn btn-danger btn delete-sertification mx-3" data-id="{{ $sertification->id }}" data-judul="{{ $sertification->judul }}">hapus</i>
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