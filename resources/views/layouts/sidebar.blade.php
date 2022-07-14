<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
      <img src="{{ asset('dist/img/halobid.png') }}" alt="halobid" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">HaloBid</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('dist/img/admin.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/admin" class="d-block">{{ auth()->user()->name }}</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item {{ 'admin' == request()->path() ? 'menu-open' : '' }}">
            <a href="/admin" class="nav-link {{ 'admin' == request()->path() ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item {{ 'admin/bidan' == request()->path() ? 'menu-open' : '' }}">
            <a href="{{ route('bidan.index') }}" class="nav-link {{ 'admin/bidan' == request()->path() ? 'active' : '' }}">
              <i class="nav-icon fas fa-user-nurse"></i>
              <p>Bidan</p>
            </a>
          </li>
          <li class="nav-item {{ 'pasien' == request()->path() ? 'menu-open' : '' }}">
            <a href="{{ route('pasien.index') }}" class="nav-link {{ 'admin/pasien' == request()->path() ? 'active' : '' }}">
              <i class="nav-icon fas fa-solid fa-bed"></i>
              <p>Pasien</p>
            </a>
          </li>
          <li class="nav-item {{ 'posyandu' == request()->path() ? 'menu-open' : '' }}">
            <a href="{{ route('posyandu.index') }}" class="nav-link {{ 'admin/posyandu' == request()->path() ? 'active' : '' }}">
              <i class="nav-icon fas fa-solid fa-hospital"></i>
              <p>Posyandu</p>
            </a>
          </li>
          <li class="nav-item {{ 'konsultasi' == request()->path() ? 'menu-open' : '' }}">
            <a href="{{ route('konsultasi.index') }}" class="nav-link {{ 'admin/konsultasi' == request()->path() ? 'active' : '' }}">
              <i class="nav-icon fas fa-solid fa-comment-dots"></i>
              <p>Konsultasi</p>
            </a>
          </li>
          <li class="nav-item {{ 'layanan' == request()->path() ? 'menu-open' : '' }}">
            <a href="{{ route('layanan.index') }}" class="nav-link {{ 'admin/layanan' == request()->path() ? 'active' : '' }}">
              <i class="nav-icon fas fa-solid fa-briefcase-medical"></i>
              <p>Layanan</p>
            </a>
          </li>
          <li class="nav-item {{ 'user' == request()->path() ? 'menu-open' : '' }}">
            <a href="/user" class="nav-link {{ 'admin/user' == request()->path() ? 'active' : '' }}">
              <i class="nav-icon fas fa-user"></i>
              <p>User</p>
            </a>
          </li>
          <li class="nav-item {{ 'mitra' == request()->path() ? 'menu-open' : '' }}">
            <a href="{{ route('mitra.index') }}" class="nav-link {{ 'admin/mitra' == request()->path() ? 'active' : '' }}">
              <i class="nav-icon fas fa-book"></i>
              <p>Mitra</p>
            </a>
          </li>
          <li class="nav-item {{ 'blog' == request()->path() ? 'menu-open' : '' }}">
            <a href="{{ route('blog.index') }}" class="nav-link {{ 'admin/blog' == request()->path() ? 'active' : '' }}">
              <i class="nav-icon fas fa-globe"></i>
              <p>Blog</p>
            </a>
          </li>
          <li class="nav-item {{ 'logout' == request()->path() ? 'menu-open' : '' }}">
          <a href="/login" class="nav-link {{ 'user.login' == request()->path() ? 'active' : '' }}">
              <i class="nav-icon fas fa-power-off"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>