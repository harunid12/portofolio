<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/icon/icon.png" type="image/x-icon">
    <title>{{ $user->name }} - Personal Portofolio</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets//css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>

    <!-- navbar -->

    <header class="navbar sticky-top navbar-expand-lg navbar-dark main-nav">
        <div class="container daftar-menu">
          <a class="navbar-brand page-scroll" href="#intro">
              Portofolio<span>.</span>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="true" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto py-3">
              <a class="nav-link px-3 page-scroll" href="#about">Tentang</a>
              <a class="nav-link px-3 page-scroll" href="#experience">Pengalaman</a>
              <!-- <a class="nav-link px-3 page-scroll" href="#projects">Proyek</a> -->
              <a class="nav-link px-3 page-scroll" href="#skills">Keahlian</a>
              <a class="nav-link px-3 page-scroll" href="#education">Pendidikan</a>
              <a class="nav-link px-3 page-scroll" href="#contact">Kontak</a>
            </div>
          </div>
        </div>
      </header>

    <!-- end navbar -->

    <!-- jumbotron -->
      
      <section id="intro" class="main-intro">
        <div class="container pt-5">
          <div class="row">
              <div class="col-lg-10 col-md-10 d-flex align-items-center intro">
                  <div>
                      <h2 class="hello mt-5">Halo, <span>Saya Ahmad Harun</span></h2>
                      <h4 class="a my-3">Seorang <span class="change-text"></span></h4>
                      <p>Saya adalah seorang programmer yang mandiri, analisis kritis, memiliki semangat dan rasa ingin tahu. Termotivasi dalam menyelesaikan masalah dunia nyata yang kompleks dan menantang</p>
                      <div class="intro-icon my-3">
                          <a href="https://www.linkedin.com/in/ahmad-harun"><i class="bi bi-linkedin"></i></a>
                          <a href="https://github.com/harunid12"><i class="bi bi-github"></i></a>
                          <a href="mailto:ahmadharun.jambi@gmail.com"><i class="bi bi-envelope-fill"></i></a>
                      </div>
                      <a href="#about" class="btn btn-secondary page-scroll">Lebih Lanjut</a>
                  </div>
              </div>
              
          </div>
        </div>
      </section>

    <!-- end jumbotron -->

    <!-- about -->
    <section id="about" class="about">
        <div class="container py-5">
            <div class="row">
            <h2 class="main-judul mb-5">Tentang Saya</h2>
                <div class="col-lg-4 col-md-5 col-sm-12  about-image">
                    <img src="{{ asset('storage/about/'.$about->image) }}" class="w-100 h-100 rounded" alt="">
                </div>
                <div class="col-lg-8 col-md-7 about-text">
                    <p>{!! $about->deskripsi !!}</p>
                    <table class="table">
                        <tbody>
                          <tr>
                            <td><strong>Tanggal Lahir : </strong>{{ $about->tanggal_lahir }}</td>
                             <td><strong>No. Telp : </strong>+62 851 5619 4420</td>
                          </tr>
                          <tr>
                             <td><strong>Alamat : </strong>{{ $about->alamat }}</td>
                             <td><strong>Email : </strong>ahmadharun.jambi@gmail.com</td>
                          </tr>
                        </tbody>
                    </table>
                    <a href="https://drive.google.com/file/d/1etg_hNDJzzf-SiusRlKhrumgEBwR9Fqt/view?usp=share_link" target="_blank" class="btn btn-success">Unduh CV</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end about -->

    <!-- experience -->
    <section id="experience" class="main-grey">
        <div class="container py-5">
            <div class="row">
                <h2 class="main-judul mb-5">Pengalaman</h2>
                <div class="col-lg-12">
                    <div class="card border-light shadow  mb-5 rounded experience-desc " >
                        <div class="card-header d-flex bd-highlight align-items-center">
                            <span><img src="assets/img/experience/candi.png" class="mx-4"></span> <h3>Candi Ads</h3> <p class="position ms-auto p-2 bd-highlight">Web Developer</p>
                        </div>
                        <div class="card-body text-experience-desc">
                        <ul>
                            <li>Melakukan Pembuatan website Company Profile</li>
                            <li>Melakukan desain website secara kreatif sesuai dengan deskripsi yang diberikan</li>
                            <li>menulis kode untuk membangun aplikasi web yang diperlukan menggunakan framework Laravel dan Bootstrap</li>
                        </ul>
                        </div>
                        <div class="card-footer">
                            September 2022 - Desember 2022 | Pekanbaru, Indonesia
                          </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card border-light shadow mb-5 bg-body rounded experience-desc" >
                        <div class="card-header d-flex bd-highlight align-items-center">
                            <span><img src="assets/img/experience/predatech.png" class="mx-4"></span> <h3>Predatech</h3> <p class="position ms-auto p-2 bd-highlight">Web Developer</p>
                        </div>
                        <div class="card-body text-experience-desc">
                        <ul>
                            <li>Pengembangan Sistem Informasi Predatech Data Center Information (PATRIOT)</li>
                            <li>Membantu menulis kode untuk membangun aplikasi web menggunakan bahasa komputer PHP, HTML, CSS, dan Javascript</li>
                            <li>Melakukan hosting website pada server</li>
                        </ul>
                        </div>
                        <div class="card-footer">
                            September 2020 - Februari 2021 | Pekanbaru, Indonesia
                          </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card border-light shadow mb-5 bg-body rounded experience-desc" >
                        <div class="card-header d-flex bd-highlight align-items-center">
                            <span><img src="assets/img/experience/rumah_sahabat.png" class="mx-4"></span> <h3>Rumah Sahabat Madani</h3> <p class="position ms-auto p-2 bd-highlight">Web Developer</p>
                        </div>
                        <div class="card-body text-experience-desc">
                        <ul>
                            <li>Melakukan Pengembangan Back-end Sistem Donasi Online (BIRKAH)</li>
                            <li>Merancang dan mendesain aplikasi web</li>
                            <li>Menulis kode untuk membangun website menggunakan bahasa komputer PHP, HTML, CSS, dan Javascript</li>
                        </ul>
                        </div>
                        <div class="card-footer">
                            Aug 2020 - Jan 2021 | Pekanbaru, Indonesia
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end experience -->
    
    <!-- projects -->
    <!-- <section id="projects" class="main-grey">
        <div class="container pt-5">
            <h2 class="main-judul">Proyek</h2>
            <div class="row text-start py-5">
                <div class="col-md-4 mb-3">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModalOne">
                        <div class="card border-0 shadow h-100" >
                            <img src="assets/img/projects/calculatorApp.jpg" class="card-img-top h-100" alt="">
                            <div class="card-body">
                            <p class="card-title text-start">Calculator Web App</p>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section> -->
    <!-- projects -->

    <!-- skills -->
    <section id="skills" class="main-blue-grey">
        <div class="container py-5">
                <h2 class="main-judul mb-5">Keahlian</h2>
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
                                        <p>{{ $item->nama }}</p>
                                    </div>
                                @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    </section>
    <!-- end skills -->

    <!-- education -->
    <section id="education" class="main-grey">
        <div class="container pt-5">
            <h2 class="main-judul">Pendidikan</h2>
            <div class="row text-start py-5">
                @foreach ($edu as $item)
                
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-10">
                    <div class="card border-0 shadow h-100">
                        <img src="{{ asset('storage/education/'.$item->image) }}" class="card-img-top object-fit-cover" alt="Edu Image">
                            <div class="card-body h-100">
                            <p class="card-title">{{ $item->lokasi }}</p>
                            <p class="card-title"><strong>Gelar : </strong>{{ $item->gelar }}</p>
                            <p class="card-title"><strong>IPK: </strong>{{ $item->ipk }}</p>
                            </div>
                      </div>
                </div>
                    
                @endforeach
            </div>
            <h2 class="main-judul">Sertifikasi</h2>
            <div class="row text-start py-5">
                @foreach ($sertification as $item)
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-3 h-100">
                    <a href="{{ $item->link }}" target="_blank" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" title="{{ $item->judul }}" data-bs-content="{{ $item->deskripsi }} - ({{ $item->tahun }})">
                        <div class="card border-0 shadow w-100">
                            <img src="{{ asset('storage/sertification/'.$item->image) }}" class="card-img-top img-certification">
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- education -->

    <!-- contacts -->
    <section id="contact" class="main-blue-grey">
        <div class="container py-5">
            <h2 class="main-judul mb-5">Kontak</h2>
            <div class="row">
                <div class="col-lg-6 col-md-6 pt-3">
                    <div class="card">
                        <div class="card-header">
                          <h5>Profil Sosial</h5>
                        </div>
                        <div class="card-body">
                            <div class="d-flex">
                                @foreach ($sosmed as $item)
                                    <div class="social-icon me-3">
                                        <a href="{{ $item->link_sosmed }}"><i class="bi {{ $item->link_icon }}"></i></a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        
                      </div>
                </div>
                <div class="col-lg-6 col-md-6 pt-3">
                    <div class="card">
                        <div class="card-header">
                          <h5>Kontak Telepon</h5>
                        </div>
                        <div class="card-body">
                          <ul>
                              @foreach ($telp as $item)
                                <li>{{ $item->telp }}</li>
                              @endforeach
                          </ul>
                        </div>
                      </div>
                </div>
        </div>
    </section>
    <!-- end contacts -->


    <!-- modals -->

    <!-- Button trigger modal -->
    <!-- Modal Projects-->
    <div class="modal fade" id="exampleModalOne" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Calculator Web App</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <ul>
                <li><strong>Tech : </strong>HTML, CSS, Javascript</li>
                <li><strong>URL: </strong><a href="https://github.com/harunid12/calculatorJs" target="_blank">Link Here</a></li>
            </ul>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo aspernatur autem quaerat culpa exercitationem! Quam molestiae eaque dolores impedit ducimus!</p>
            </div>
        </div>
        </div>
    </div>

<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>