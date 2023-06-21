@extends('layouts.main')

@section('title', 'Skills')

@section('content')
    
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>
              Pengaturan
            </h1>
          </div>
        </div>
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
                  <i class="fas fa-cog"> Keahlian</i>
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="col-md-10">
                    <div class="row">
                      <div class="align-item-center">
                        <a href="/{{ Auth::user()->username }}/skill-create" class="btn btn-primary">Tambah Keahlian<i class="fa fa-plus-circle text-white mx-2"></i></a>
                      </div>
                    </div>
                  </div>
              </div>
              <!-- /.card-body -->
            </div>
            
          </div>
          <!-- /.col -->

          @foreach ($skill->groupBy('skill_type.nama') as $groupedSkills)
          <div class="col-lg-12 col-md-12 col-sm-12 mt-3">
                <div class="card border-light mb-3 shadow mb-5 bg-body rounded experience-desc">
                    <div class="card-header d-flex bd-highlight skills-heading">
                        <h2 style="font-weight: normal;">{{ $groupedSkills->first()->skill_type->nama }}</h2>
                    </div>
                    <div class="card-body skills-body">
                        <div class="row">
                          @foreach ($groupedSkills as $item)
                            <div class="col-lg-2 col-md-3 col-sm-4 col-4 text-center">
                                <img src="{{ asset('storage/skill/'.$item->image) }}" alt="Skill Image" width="100" height="100" >
                                <a href="/skill-edit/{{ $item->id }}" class="mt-2" style="display: block; color:black">{{ $item->nama }}</a>
                            </div>
                          @endforeach
                        </div>
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

    