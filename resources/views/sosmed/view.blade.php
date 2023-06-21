@extends('layouts.main')

@section('title', 'Social Media')

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
                  <i class="fas fa-cog"> Sosial Media</i>
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="col-md-10">
                    <div class="row">
                      <div class="align-item-center">
                        <a href="/{{ Auth::user()->username }}/sosmed-create" class="btn btn-primary">Tambah Sosial Media<i class="fa fa-plus-circle text-white mx-2"></i></a>
                      </div>
                    </div>
                  </div>
                  <!-- text input -->
                  <div class="mt-5">
                      @foreach ($sosmed as $item)
                      <div class="form-group d-flex align-items-center">
                        <div class="">
                            <i class="bi {{ $item->link_icon }}"></i>
                        </div>
                        <div class="col-9 d-flex align-items-center">
                          <input type="text" class="form-control" value="{{ $item->link_sosmed }}" placeholder="link" id="inputEmail3">
                          <a href="/sosmed-edit/{{ $item->id }}" class="ml-2"><i class="fa fa-pen-square"></i></a>
                          <a href="#" class="ml-2"><i class="fa fa-trash text-danger delete-sosmed" data-id="{{ $item->id }}"></i></a>

                        </div>
                      </div>
                      @endforeach

                  </div>
              </div>
              <!-- /.card-body -->
            </div>
            
          </div>
          
          
        
        </div>
        <!-- ./row -->
      </div><!-- /.container-fluid -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection

    