@use (App\Models\User)
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard" class="brand-link">
      <img src="{{asset ('admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset ('admin/dist/img/avatar3.png')}}" class="img-circle elevation-2" alt="gambar">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name}}</a>
          <span class="text-primary">Role : {{ Auth::user ()->role }}</span>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{url ('/dashboard')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url ('dashboard/kelurahan')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kelurahan</p>
                </a>
              </li>
              @auth
                @if (Auth::user()->role == 'administrator')
                <li class="nav-item">
                  <a href="{{url ('dashboard/pasien')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pasien
                      <span class="right badge badge-danger">New</span>
                    </p>
                  </a>
                @endif
              </li>
              @endauth
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{url ('dashboard/kelurahan')}}" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Log Out
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url ('dashboard/pasien')}}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Ganti Akun
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
