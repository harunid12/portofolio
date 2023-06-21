@extends('layouts.main')

@section('title', 'Edit Keahlian')
    
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
                <h3 class="card-title">Edit Keahlian</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/skill-update/{{ $skill->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleSelectRounded0">Tipe Skill</label>
                    <select class="custom-select rounded-0" name="skill_type_id" id="exampleSelectRounded0">
                        <option value="{{ $skill->skill_type->id }}">{{ $skill->skill_type->nama }}</option>
                        @foreach ($skill_type as $item)
                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="image" class="col-sm-2 col-form-label">Ikon Skill</label>
                    <div class="col-sm-4">
                      <input type="file" class="dropify" name="image" data-default-file="{{ asset('storage/skill/'.$skill->image) }}" data-height="150" data-width="100" data-max-file-size="1M">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" value="{{$skill->nama }}" class="form-control" name="nama" id="nama" placeholder="nama">
                  </div>
                </div>
                <!-- /.card-body -->

                <a href="#" class="btn btn-danger btn delete-skill mx-3" data-id="{{ $skill->id }}" data-nama="{{ $skill->nama }}">hapus</i>
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