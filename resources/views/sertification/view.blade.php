@extends('layouts.main')

@section('title', 'Sertification')

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

            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-cog"> Sertifikasi</i>
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="col-md-10">
                    <div class="row">
                      <div class="align-item-center">
                        <a href="/{{ Auth::user()->username }}/sertification-create" class="btn btn-primary">Tambah Sertifikasi<i class="fa fa-plus-circle text-white mx-2"></i></a>
                      </div>
                    </div>
                  </div>
              </div>
              <!-- /.card-body -->
            </div>
            
          </div>
          <!-- /.col -->
                @foreach ($sertification as $item)
                
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-3 h-100">
                    <a href="/sertification-edit/{{ $item->id }}" >
                        <div class="card border-0 shadow w-100">
                            <img src="{{ asset('storage/sertification/'.$item->image) }}" class="card-img-top img-certification">
                        </div>
                    </a>
                </div>
                    
                @endforeach
        
        </div>
        <!-- ./row -->
      </div><!-- /.container-fluid -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection

    