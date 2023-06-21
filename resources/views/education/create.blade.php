@extends('layouts.main')

@section('title', 'Education create')

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
                <h3 class="card-title">Tambah Pendidikan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/{{ Auth::user()->username }}/education-save" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                <div class="form-group">
                    <label for="image" class="col-sm-2 col-form-label">logo Instansi</label>
                    <div class="col-sm-4">
                      <input type="file" class="dropify" name="image" data-height="150" data-width="100" data-max-file-size="1M">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="text">Lokasi Pendidikan</label>
                    <input type="text" class="form-control" name="lokasi" id="lokasi" placeholder="ex:pekanbaru, Indonesia">
                  </div>
                  <div class="form-group">
                    <label for="text">Gelar Pendidikan</label>
                    <input type="text" class="form-control" name="gelar" id="gelar" placeholder="gelar">
                  </div>
                  <div class="form-group">
                    <label for="text">IPK</label>
                    <div class="row">
                        <div class="col-lg-1">
                            <input type="text" class="form-control" name="ipk" id="ipk" placeholder="...">
                        </div>
                        <p>/</p>
                        <div class="col-lg-1">
                            <input type="text" class="form-control" value="4.0" readonly>
                        </div>
                    </div>
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