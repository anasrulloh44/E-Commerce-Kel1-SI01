<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{asset('assets')}}/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
      style="opacity: .8">
    <span class="brand-text font-weight-light">BouquetBeauty</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
     <!-- Sidebar user (optional) -->
     <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('assets')}}/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
            </div>
            @auth 
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name}}</a>
                <span class="text-primary">{{ Auth::user()->role}}</span>
            </div>
            @endauth
            
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
        <li class="nav-item">
          <a href="{{ url('admin/jenisproduk') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Jenis Produk</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('admin/kategoritokoh') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Kategori Tokoh</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('admin/produk') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Produk</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('admin/testimoni') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Testimoni</p>
          </a>
        </li>
        <li class="nav-item">
          <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit" class="nav-link collapsed" href="#">
              <i class="bi bi-box-arrow-right"></i>
              <span>Logout</span>
            </button>
          </form>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>