@extends('layouts.main')

@section('title', 'Sosmed Edit')

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
                <h3 class="card-title">Edit Sosial Media</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/sosmed-update/{{ $sosmed->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="text">Icon <p style="display: inline; font-weight:normal" class="text-danger"> Agar menggunakan icon Bootstrap <a href="https://icons.getbootstrap.com/" >link here</a></p></label>
                    <input type="text" class="form-control" value="{{ $sosmed->link_icon }}" name="link_icon" id="link_icon" placeholder="ex: bi-facebook">
                  </div>
                  <div class="form-group">
                    <label for="text">Link Sosial Media </label>
                    <input type="text" class="form-control" value="{{ $sosmed->link_sosmed }}" name="link_sosmed" id="link_sosmed" placeholder="....">
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