
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('backend/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Personal Portofolio</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ Auth::user()->image != '' ? asset('storage/users/'. Auth::user()->image) : asset('image_default/admin.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          @if (Auth::user()->role_id == 1)
          <li class="nav-item">
            <a href="/dashboard" class="nav-link {{ Request::is('dashboard') ? 'active': '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/users" class="nav-link {{ Request::is('users') ? 'active': '' }}">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Users
              </p>
            </a>
          </li>
          @endif

          <li class="nav-item">
            <a href="/profile/{{ Auth::user()->username }}" class="nav-link {{ Request::is('profile/'. Auth::user()->username ) ? 'active': '' }}">
              <i class="nav-icon far fa-user"></i>
              <p>
                Profile
              </p>
            </a>
          </li>
          @if (Auth::user()->role_id != 1)
          <li class="nav-item {{ Request::is(Auth::user()->username.'/intro*', Auth::user()->username.'/about*', Auth::user()->username.'/skills*', Auth::user()->username.'/education*', Auth::user()->username.'/sertification*', Auth::user()->username.'/experience*', Auth::user()->username.'/sosmed*', Auth::user()->username.'/telp*') ? 'menu-open': '' }}">
            <a href="#" class="nav-link ">
              <i class="nav-icon fa fa-cog"></i>
              <p>
                Data Master
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/{{ Auth::user()->username }}/intro" class="nav-link {{ Request::is(Auth::user()->username.'intro*') ? 'active': '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Intro</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/{{ Auth::user()->username }}/about" class="nav-link {{ Request::is(Auth::user()->username.'/about*') ? 'active': '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>About</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/{{ Auth::user()->username }}/skills" class="nav-link {{ Request::is(Auth::user()->username.'/skills*') ? 'active': '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Skills</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/{{ Auth::user()->username }}/education" class="nav-link {{ Request::is(Auth::user()->username.'/education*') ? 'active': '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Education</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/{{ Auth::user()->username }}/sertification" class="nav-link {{ Request::is(Auth::user()->username.'/sertification*') ? 'active': '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sertification</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/{{ Auth::user()->username }}/experience" class="nav-link {{ Request::is(Auth::user()->username.'/experience*') ? 'active': '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Experience</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/{{ Auth::user()->username }}/sosmed" class="nav-link {{ Request::is(Auth::user()->username.'/sosmed*') ? 'active': '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Media Sosial</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/{{ Auth::user()->username }}/telp" class="nav-link {{ Request::is(Auth::user()->username.'/telp*') ? 'active': '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nomor Telp</p>
                </a>
              </li>
            </ul>
          </li>
          @endif
          <li class="nav-item">
            <a href="/logout" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>