@extends('layouts.main')

@section('title', 'Experience')

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
                  <i class="fas fa-cog"> Pengalaman</i>
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="col-md-10">
                    <div class="row">
                      <div class="align-item-center">
                        <a href="/{{ Auth::user()->username }}/experience-create" class="btn btn-primary">Tambah Pengalaman<i class="fa fa-plus-circle text-white mx-2"></i></a>
                      </div>
                    </div>
                  </div>
              </div>
              <!-- /.card-body -->
            </div>
            
          </div>
          <!-- /.col -->
                @foreach ($exp as $item)
                
                
                <div class="col-lg-12">
                    <div class="card border-light shadow  mb-5 rounded experience-desc " >
                        <div class="card-header d-flex bd-highlight align-items-center">
                            <span><img src="{{ asset('storage/experience/'.$item->image) }}" class="mx-4"></span> <h3>{{ $item->nama_perusahaan }}</h3> <p class="ml-auto">{{ $item->jabatan }}</p>
                        </div>
                        <div class="card-body text-experience-desc">
                        {!! $item->deskripsi !!}
                        </div>
                        <div class="card-footer">
                            {{ $item->tanggal_mulai }} - @if ($item->tanggal_berakhir == '')
                                {{ $item->masih_bekerja }}
                            @else
                                {{ $item->tanggal_berakhir }}
                            @endif | {{ $item->lokasi }}
                          </div>
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

    