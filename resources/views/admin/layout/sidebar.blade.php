<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{ asset('AdminLTE/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
    style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('AdminLTE/dist/img/abdi.jpg') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="{{ url('admin/userv') }}" class="d-block">[Admin {{ auth()->user()->name }}]</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item has-treeview">
          <a href="{{ url('/admin') }}" class="nav-link {{ Request::is('admin') ? 'active' : ''}}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-header">MAIN</li>
          <li class="nav-item has-treeview {{ Request::is('admin/berita','admin/kategori','admin/user') ? 'menu-open' : ''}}">
            <a href="#" class="nav-link {{ Request::is('admin/berita','admin/kategori','admin/user') ? 'active' : ''}}">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                MASTER
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admin/berita') }}" class="nav-link {{ Request::is('admin/berita') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Berita</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('admin/kategori') }}" class="nav-link {{ Request::is('admin/kategori') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kategori</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('admin/user') }}" class="nav-link {{ Request::is('admin/user') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User</p>
                </a>
              </li>
            </ul>
          </li>
        <li class="nav-header">USER MAIN</li>
          <li class="nav-item has-treeview">
            <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <i class="nav-icon fas fa-sign-out-alt "></i>
              <p>
                  LOGOUT
              </p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>  
          </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->     
    <!-- /.Nav Link -->
  </div>
  <!-- /.sidebar -->
</aside>