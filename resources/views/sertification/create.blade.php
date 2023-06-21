@extends('layouts.main')

@section('title', 'Sertification create')

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
                <h3 class="card-title">Tambah Sertifkasi</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/{{ Auth::user()->username }}/sertification-save" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                <div class="form-group">
                    <label for="image" class="col-sm-2 col-form-label">Image Sertifikasi</label>
                    <div class="col-sm-4">
                      <input type="file" class="dropify" name="image" data-height="150" data-width="100" data-max-file-size="1M">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="text">Link Sertifikasi</label>
                    <input type="text" class="form-control" name="link" id="link" placeholder="...">
                  </div>
                  <div class="form-group">
                    <label for="text">Judul Sertifikasi</label>
                    <input type="text" class="form-control" name="judul" id="judul" placeholder="judul">
                  </div>
                  <div class="form-group">
                    <label for="text">Deskripsi</label>
                    <input type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="deskripsi">
                  </div>
                  <div class="form-group">
                    <label for="text">Tahun</label>
                    <input type="text" class="form-control" name="tahun" id="tahun" placeholder="tahun">
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