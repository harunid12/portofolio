@extends('layouts.main')

@section('title', 'Create Experience')

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
        <div class="row">
          <!-- left column -->
          <div class="col-md-6 ">
            <form action="/berita-store" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- general form elements -->
            <div class="card card-primary">
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama_perusahaan">Perusahaan</label>
                    <input type="text" class="form-control" name="nama_perusahaan" id="nama_perusahaan" placeholder="nama_perusahaan">
                  </div>
                  <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="jabatan">
                  </div>
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" id="summernote" rows="5">
                      Some Text Here
                    </textarea>
                  </div>
                  <div class="form-group">
                    <label for="lokasi">Lokasi</label>
                    <input type="text" class="form-control" name="lokasi" id="lokasi" placeholder="lokasi">
                  </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
          <div class="col-md-6">
            <div class="card card-primary">
                <!-- /.card-header -->
                <!-- form start -->
                  <div class="card-body">
                    <div class="form-group">
                      <label for="image" class="col-form-label">Image Perusahaan</label>
                      <div>
                        <input type="file" class="dropify" name="image" data-height="150"  data-width="100" data-max-file-size="1M">
                      </div>
                    </div>
                    <div class="form-group">
                        <label >Tanggal Mulai </label>
                        <input type="text" name="tanggal_mulai" class="form-control" id="datepicker" placeholder="YYYY-mm-dd" />
                      </div>
                      <div class="form-group">
                        <div class="row align-items-center">
                          <div class="col-md-6" id="tanggal_akhir">
                            <label>Tanggal Berakhir</label>
                            <input type="text" name="tanggal_berakhir" class="form-control" id="datepicker2" placeholder="YYYY-mm-dd" />
                          </div>
                          <div class="col-md-6">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="masihBekerja">
                              <label class="form-check-label" for="masihBekerja">Masih Bekerja</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                  </div>
              </div>
          </div>
        </form>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection