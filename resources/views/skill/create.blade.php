@extends('layouts.main')

@section('title', 'Skill create')

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
                <h3 class="card-title">Tambah Skill</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/{{ Auth::user()->username }}/skill-save" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleSelectRounded0">Tipe Skill</label>
                    <select class="custom-select rounded-0" name="skill_type_id" id="exampleSelectRounded0">
                        <option value="">--- pilih ---</option>
                        @foreach ($skill_type as $item)
                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="image" class="col-sm-2 col-form-label">Ikon Skill</label>
                    <div class="col-sm-4">
                      <input type="file" class="dropify" name="image" data-height="150" data-width="100" data-max-file-size="1M">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="text">Nama Skill</label>
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="nama">
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