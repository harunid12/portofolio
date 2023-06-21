@extends('layouts.main')

@section('title', 'Education')

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
                  <i class="fas fa-cog"> Pendidikan</i>
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="col-md-10">
                    <div class="row">
                      <div class="align-item-center">
                        <a href="/{{ Auth::user()->username }}/education-create" class="btn btn-primary">Tambah Pendidikan<i class="fa fa-plus-circle text-white mx-2"></i></a>
                      </div>
                    </div>
                  </div>
              </div>
              <!-- /.card-body -->
            </div>
            
          </div>
          <!-- /.col -->
                @foreach ($edu as $item)
                
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-10 my-3">
                    <div class="card border-0 shadow h-100">
                        <img src="{{ asset('storage/education/'.$item->image) }}" class="card-img-top object-fit-cover" alt="Edu Image">
                        <a href="/education-edit/{{ $item->id }}" style="color: black">
                            <div class="card-body h-100">
                            <p class="card-title">{{ $item->lokasi }}</p>
                            <p class="card-title"><strong>Gelar : </strong>{{ $item->gelar }}</p>
                            <p class="card-title"><strong>IPK: </strong>{{ $item->ipk }}</p>
                            </div>
                        </a>
                      </div>
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

    