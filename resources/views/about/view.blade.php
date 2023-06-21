@extends('layouts.main')

@section('title', 'About')

@section('content')
    
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
          <div class="col-md-12">

            {{-- About Settings --}}
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-cog"> About</i>
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="/about-update/{{ $about->username }}" method="POST" enctype="multipart/form-data">
                  <div class="row">
                    @csrf
                    @method('PUT')
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="image" class="col-form-label">Image</label>
                        <div class="col-sm-12">
                          <input type="file" class="dropify" name="image" data-height="150" data-default-file="{{ asset('storage/about/'.$about->image) }}" data-width="100" data-max-file-size="1M">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="form-group">
                        <label>About</label>
                        <textarea class="form-control" name="deskripsi" id="summernote" rows="7">
                          {!! $about->deskripsi !!}
                        </textarea>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                              <label >Tanggal Lahir </label>
                              <input type="text" name="tanggal_lahir" value="{{ $tanggal }}" class="form-control" id="datepicker" placeholder="YYYY-mm-dd" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Alamat</label>
                                <div class="input-group">
                                <input type="text" name="alamat" class="form-control" value="{{ $about->alamat }}" id="inputName" placeholder="Alamat">
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <button type="submit" class="btn btn-primary float-right mt-3">Update</button>
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            {{-- End About Setting --}}
            
          </div>
          <!-- /.col -->
        </div>
        <!-- ./row -->
      </div><!-- /.container-fluid -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection

    